<?php

namespace App\Jobs;

use App\Models\Image;
use Google\Cloud\Vision\V1\ImageAnnotatorClient;
use GPBMetadata\Google\Cloud\Vision\V1\ImageAnnotator;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class GoogleVisionLabelImage implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    private $announcement_image_id;
    /**
     * Create a new job instance.
     */
    public function __construct($announcement_image_id)

    {
        $this->announcement_image_id=$announcement_image_id;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $i=Image::find($this->announcement_image_id);
        if(!$i)
        {
            return;
        }

        $image=file_get_contents(storage_path('app/public/'. $i->path));

        $imageAnnotator=new ImageAnnotatorClient();
        $response=$imageAnnotator->labelDetection($image);
        $labels=$response->getLabelAnnotations();

        if($labels){
            $result=[];
            foreach ($labels as $label) {
                $result[]=$label->getDescription();
            }  
        $i->labels=$result;
        $i->save();
        }
        
        $imageAnnotator->close();
    }
}