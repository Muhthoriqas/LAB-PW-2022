@extends('template.fenavbar')

@section('title', $title)

@section('content')
    <div class="jumtron">
        <div class="jumtron-content">
            <div class="top-content">
                <div class="d-flex justify-content-center pt-5">
                    <p class="h1 p-3" id="welcome"><i class="bi bi-building"></i></p>
                </div>
                <br>
                <div class="d-flex justify-content-center">
                    <p class="h2 p-3" id="stuto">Sikula Learning Management System</p>
                </div>
            </div>
            <div class="bottom-content">
                <div class="d-flex justify-content-center">
                    <div class="jumtron-text">
                        <p class="h5 py-3 text-center" id="jumtron-text-header">About Sikula</p>
                        <p class="px-3" id="jumtron-text-desc">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa odit quisquam vero quo ex totam
                            voluptatum? Eum, ab corrupti voluptatum sint suscipit autem debitis quam quasi numquam modi,
                            repellat eius!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
