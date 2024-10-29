<style>
    .pad-bg {
        background: #f8f8f8;
        padding: 40px 20px;
        border-radius: 5px;
        margin-top: 50px;
        margin-bottom: 50px;
        border: 1px solid #e5e5e5;

        h1 {
            padding-bottom: 30px;
            margin-top: 0;
            margin-bottom: 30px;
            border-bottom: 1px dashed #ccc;
        }
    }
</style>
<div class="row">
    <div class="col-sm-8 col-sm-offset-2">
        <!-- Default form -->
        <form method="post" action="{{route('request.update')}}" class='pad-bg'>
            @csrf
            @method('PUT')
            <h1 class="text-center">Edit Permintaan</h1>
            <div class="form-group">
                <label for="">Nama</label>
                <input value="{{$data['nama_permintaan']}}" name="nama_permintaan" type="text" class="i-box form-control input-lg" />
                <input value="{{$data['id']}}" name="id" type="hidden" class="i-box form-control input-lg" />
            </div>
            <br>
            <div class="form-group">
                <label for="">Keterangan</label>
                <textarea name="keterangan" id="" class="form-control input-lg">{{$data['keterangan']}}</textarea>
            </div>
            <br>
            <button type="submit" class="btn btn-success btn-lg">SUBMIT</button>
        </form>
    </div>
</div>