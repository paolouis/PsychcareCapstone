@extends('layouts.app')


@section ('content')

{!! Form::open(['action' => 'QuestionsController@createquestions']) !!}
    <h3> Questions</h3>

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
    Add New
    </button>

    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Create New Question</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <div class="modal-body">
                <div class="form-group">
                    <input type="text" name="questions" class="form-control" id="inputquestion" aria-describedby="emailHelp" placeholder="Enter question here.. ">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Categories</label>
                    <select class="form-control" name="categories" id="exampleFormControlSelect1">
                        <option value="1">Psychological Exam</option>
                        <option value="2">Type of Learners</option>
                        <option value="3">Personality Exam</option>
                        <option value="4">Are you Depressed?</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlSelect1">Category type</label>
                    <select class="form-control" name="categories" id="exampleFormControlSelect1">
                        <option value="1">Psychological Exam</option>
                        <option value="2">Type of Learners</option>

                    </select>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save changes</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>            
            </div>
        </div>
    </div>
    </div>


{!! Form::close() !!}








     














@endsection