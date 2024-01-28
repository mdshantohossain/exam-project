@extends('master')

@section('body')
    <form action="{{ route('result') }}" method="POST">
        @csrf
        <div class="main">
            <div class="card">
                @foreach($exam_name as $name)
                <p class="exam-name">{{ $name->exam_name }}</p>
                @endforeach
            </div>
            @foreach($students as $student)
            <div class="card">
                <p class="question">Student Name<span>*</span></p>
                <input type="text" value="{{ $student->student_name }}" name="student_name" placeholder="Your answer" />
            </div>
            <div class="card">
                <p class="question">Student ID<span>*</span></p>
                <input type="text" value="{{ $student->student_id }}" name="student_id" placeholder="Your answer" />
            </div>
            <div class="card">
                <p class="question">Batch Number<span>*</span></p>
                <input type="text" value="{{ $student->batch_no }}" name="batch_no" placeholder="Your answer" />
            </div>
            @endforeach


            @foreach($results as $result)
                <div class="card">
                        <div class="question_title">
                            <div class="d-block f-left q-heading">{{ $result->question_title }}</div>
                            <div class="point">{{ $result->point }} points</div>
                            <div class="point">
                                <input type="hidden" name="question_id[]" value="{{ $result->id }}" />
                                <input type="text" name="mark[]" placeholder="Mark" />
                            </div>
                        </div>
                    <div class="question-body">
                        {{ $result->question_body }}
                    </div>
                    <div>
                        <input type="text" class="answer" value="{{ $result->answer }}" placeholder="Your answer" /><br>
                    </div>
                </div>
            @endforeach

            <div class="card">
                <div class="question_title">
                    <div class="d-block f-left q-heading">Examiner Name <span>*</span></div>
                </div>
                <div>
                    <select name="" id="" class="form-select mt-4 mb-4">
                        <option value="">Choose</option>
                        @foreach($teachers as $teacher)
                            @if($teacher->examiner_name !== null)
                                <option value="{{ $teacher->examiner_name }}" selected>{{ $teacher->examiner_name }}</option>
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
