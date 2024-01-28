@extends('master')


@section('body')
    <form action="{{ route('answer') }}" method="POST">
        @csrf
        <div class="main">
            <div class="card">
                @foreach($exam_name as $name)
                <p class="exam-name">{{ $name->exam_name }}</p>
                @endforeach
            </div>
            <div class="card">
                <p class="question">Student Name<span>*</span></p>
                <input type="text" name="student_name" placeholder="Your answer" />
            </div>
            <div class="card">
                <p class="question">Student ID<span>*</span></p>
                <input type="text" name="student_id" placeholder="Your answer" />
            </div>
            <div class="card">
                <p class="question">Batch Number<span>*</span></p>
                <input type="text" name="batch_no" placeholder="Your answer" />
            </div>

            @foreach($questions as $question)
                <div class="card">
                    <div class="question_title">
                        <div class="d-block f-left q-heading">{{ $question->question_title }}</div>
                        <div class="f-right text-muted">{{ $question->point }} points</div>
                    </div>
                    <div class="question-body">
                        {{ $question->question_body }}
                    </div>
                    <div>
                        <input type="hidden" name="question_id[]" value="{{ $question->id }}" />
                        <input type="text" class="answer" name="answer[]" placeholder="Your answer" /><br>
                        <p class="text-danger">{{ $errors->has('answer*') ? $errors->first('answer*') : '' }}</p>
                    </div>
                </div>
            @endforeach

            <div class="card">
                <div class="question_title">
                    <div class="d-block f-left q-heading">Examiner Name <span>*</span></div>
                </div>
                <div>
                    <select name="examiner_name" id="" class="form-select mt-4 mb-4">
                        <option value="">Choose</option>
                        @foreach($teachers as $teacher)
                            @if($teacher->examiner_name !== null)
                                <option value="{{ $teacher->examiner_name }}">{{ $teacher->examiner_name }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="submit">
                <button type="submit" class="submit-button f-right">Submit</button>
            </div>
        </div>
    </form>
@endsection
