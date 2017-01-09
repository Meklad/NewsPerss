@extends('main')

@section('title')
    إتصل بنا
@stop

@section('content')
        <!-- Start Content -->
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1>إتصل بنا</h1>
                <hr>
                <form>
                    <div class="form-group">
                        <label name="email">البريد الالكتروني:</label>
                        <input id="email" name="email" class="form-control">
                    </div>

                    <div class="form-group">
                        <label name="subject">عنوان الرسالة:</label>
                        <input id="subject" name="subject" class="form-control">
                    </div>

                    <div class="form-group">
                        <label name="message">نص الرسالة:</label>
                        <textarea id="message" name="message" class="form-control" placeholder="أكتب نص الرسالة هنا ..."></textarea>
                    </div>
                    <input type="submit" value="إرسال" class="btn btn-success">
                </form>
                <hr>
            </div>
            <!-- Start Side Bar -->
            <div class="col-md-3 col-md-offset-1">
                <h2>القائمة الجانبية</h2>
            </div>
            <!-- End Side Bar -->
        </div>
    </div>
    <!-- End Content -->
@stop