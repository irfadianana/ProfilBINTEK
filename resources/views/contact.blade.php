@extends('includes.head')
@section('title', 'Contact')
@section('content') <br>

<div class="container">
    <div class="text-center"><h1>Contact</h1></div>
        <hr>

        <div class="col-md-8 col-md-offset-2">
            <div class="well well-sm">
                <fieldset>
                    <legend class="text-center">Kontak Kami</legend>
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label class="col-md-3 control-lable">Nama :</label>
                            <div class="col-md-8">
                                <input type="" name="" class="form-control" placeholder="Nama anda...">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-lable">Email :</label>
                            <div class="col-md-8">
                                <input type="" name="" class="form-control" placeholder="Email anda...">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-lable">Pesan :</label>
                            <div class="col-md-8">
                                <textarea type="" name="" rows="5" class="form-control" placeholder="Pesan anda..."></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-11 text-right">
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </div>

                    </form>
                </fieldset>
            </div>

        </div>

</div>

<br>
<br>
<br>
<br>
<br>


@endsection