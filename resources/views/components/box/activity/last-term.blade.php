<div>
    @if(!isset($term) || empty($term))
    <div class="col-12">
        <div class="alert alert-danger alert-sm">
            {{ __("You don't have any terms, you can add any term that you want.") }}
        </div>
    </div>
    @else

    <div class="col-12 mb-2">

        <div class="card border-left-primary bg-light shadow">
            <div class="card-header">
                {{ __('Last Activity') }}
            </div>
            <div class="card-body p-4 text-left">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-4">
                        <div class="row">

                         

                            <div class="col-2">
                                <img src="{{ URL::to('term/' . $term->image) }}" class="img-fluid" alt="">
                            </div>



                            <div class="col ml-3 align-middle">
                                <h6 class="text-secondary fs-5">
                                    {{ $term->Department->title }} | {{ $term->Course->title }}
                                </h6>

                                <div class="text-lg pt-2 font-weight-bold mb-1 text-primary">
                                    <a class="text-secondary" href="{{ route('learningCourse', $term->id) }}">
                                        {{ $term->title }}
                                    </a>
                                </div>

                               

                            </div>
                            <div class="col-4">
                                <h6 class="font-weight-bold text-dark">{{ __('Complete') }}</h6>
                                <p class="text-dark">
                                    <i class="fa fa-flag-checkered"></i>
                                    <a href="" class="">Find your lecturer notes and assesement</a>
                                </p>
                                <small class="text-secondary">Level 100 | Discussion</small>

                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>


    @endif
</div>