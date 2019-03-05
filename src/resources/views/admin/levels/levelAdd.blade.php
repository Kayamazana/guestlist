@extends('layouts.admin.layout')

@section('content')
    <div class="content-block" id="level-add">
        <div class="block-header">
            <div class="block-title">Add Level</div>
        </div>
        <div class="block-body">
            <div class="form task-add">
                <form method="POST" action="" enctype="multipart/form-data">
                @csrf
                    <div class="form-row">
                        <div class="form-input num level-level">
                            <div class="input-label">
                                <label>level</label>
                            </div>
                            <div class="input">
                                <input type="number" name="level_level" value="{{$nextLevel}}">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-input num level-points">
                            <div class="input-label">
                                <label>points</label>
                            </div>
                            <div class="input">
                                <input type="number" name="level_points" value="{{$points_min}}">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-input color level-color">
                            <div class="input-label">
                                <label>color</label>
                            </div>
                            <div class="input">
                                <input type="color" name="level_color">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-input image level-image">
                            <div class="input-label">
                                <label>background</label>
                            </div>
                            <div class="input">
                                <div class="button">
                                    SELECT IMAGE
                                </div>
                                <input type="file" name="level_image">
                            </div>
                            <div class="preview background-cover">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-submit level-submit">
                            <button class="submit" type="submit" name="level_submit">CREATE LEVEL</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
