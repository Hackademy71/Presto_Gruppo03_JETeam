<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                    <label for="floatingTextarea2"> Manda un messaggio all' inserzionista </label>
                    <a href="{{route('contactUser',compact(Announcement::user(),))}}"></a>
                  </div>
                
            </div>
        </div>
    </div>
</x-layout>