<?php

namespace App\Jobs;

use Spatie\Image\Image as SpatieImage;
use App\Models\Image;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Google\Cloud\Vision\V1\ImageAnnotatorClient;

class RemoveFaces implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    private $announcement_image_id;
    public function __construct($announcement_image_id)
    {
        $this->$announcement_image_id=$announcement_image_id;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
    $i=Image::find($this->announcement_image_id);
    if(!$i) {
        return;
    }
   

    $srcPath=storage_path('app/public' . $i->path);
    $image=file_get_contents($srcPath);
    puten('GOOGLE_APPLICATION_CREDENTIALS='.base_path('google_credential_json'));

    $imageAnnotator =new ImageAnnotatorClient();
    $response=$imageAnnotator->faceDetection($image);
    $faces = $response->getFaceAnnotations();

    foreach ($faces as $face) {
    $vertices=$face->getBoundingPoly()-> getVertices();

    $bounds = [];
    foreach ($vertices as $vertex) {
        $bounds []= [$vertex->getX(), $vertex->getY()];
    }
    $w=$bounds [2][0] - $bounds [0][0];
    $h=$bounds [2][1] - $bounds [0][1];

    $image=Spatieimage::load($srcPath);

    $image->watermark('public/img/deadpool.png')
    ->watermarkPosition('top-left')
    ->watermarkPadding($bounds [0][0], $bounds [0][1])
    ->watermarkWidth($w, Manipulation::UNIT_PIXELS)
    ->watermarkHeight($h, Manipulation::UNIT_PIXELS)
    ->watermarkFit(Manipulation::FIT_STRETCH);

    $image->save($srcPath);
    

}

$imageAnnotator->close();
    }
}
    
    
