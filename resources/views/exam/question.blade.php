@extends('master')

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card mt-5">
                    <div class="card-body">
                        <h5 class="text-center text-success">{{ session('message') }}</h5>
                        <form action="{{ route('question.create') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label class="col-md-3">Question Title</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="question_title" />
                                    <span class="text-danger">{{  $errors->has('question_title') ? $errors->first('question_title') : '' }}</span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="col-md-3">Question Body</label>
                                <div class="col-md-9">
                                    <textarea name="question_body" class="form-control" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="col-md-3">Point</label>
                                <div class="col-md-9">
                                    <input type="number" class="form-control" name="point" />
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="col-md-12 mt-4">
                                    <h4>Exam & Examiner name give it once</h4>
                                </label>
                            </div>
                            <div class="mb-3">
                                <label class="col-md-3">Exam Name</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="exam_name" />
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="col-md-3">Examiner Name</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="examiner_name" />
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <button class="btn btn-success ">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
