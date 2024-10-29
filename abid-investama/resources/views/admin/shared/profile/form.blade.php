<h1 class="mt-4">Company Profile</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Dashboard</li>
</ol>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Company Profile Form
    </div>
    <?php
    $list = $data->toArray();
    ?>
    <div class="card-body">
        <form action="{{ route('dashboard.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="form-group">
                    <label for="exampleFormControlFile1"><strong>Main Banner :</strong></label>
                    <input name="filename" type="file" class="form-control-file" value="{{ old('filename', $list[0]->filename ?? '') }}" id="exampleFormControlFile1">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label"><strong>About Us :</strong> </label>
                    <textarea name="about_us" class="form-control" id="exampleFormControlTextarea1" rows="3">{{ old('about_us', $list[0]->about_us ?? '') }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label"><strong>Motto :</strong></label>
                    <textarea name="motto" class="form-control" id="exampleFormControlTextarea1" rows="3">{{ old('motto', $list[0]->motto ?? '') }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label"><strong>Parking Solutions :</strong></label>
                    <textarea name="parking_solution" class="form-control" id="exampleFormControlTextarea1" rows="3">{{ old('parking_solution', $list[0]->parking_solution ?? '') }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label"><strong>COMMITMENT :</strong></label>
                    <textarea name="commitment" class="form-control" id="exampleFormControlTextarea1" rows="3">{{ old('commitment', $list[0]->commitment ?? '') }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label"><strong>EXPERIENCE :</strong></label>
                    <textarea name="experience" class="form-control" id="exampleFormControlTextarea1" rows="3">{{ old('experience', $list[0]->experience ?? '') }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label"><strong>INSURANCE :</strong></label>
                    <textarea name="insurance" class="form-control" id="exampleFormControlTextarea1" rows="3">{{ old('insurance', $list[0]->insurance ?? '') }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label"><strong>TECHNOLOGY :</strong></label>
                    <textarea name="technology" class="form-control" id="exampleFormControlTextarea1" rows="3">{{ old('technology', $list[0]->technology ?? '') }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label"><strong>AGREEMENT :</strong></label>
                    <textarea name="agreement" class="form-control" id="exampleFormControlTextarea1" rows="3">{{ old('agreement', $list[0]->agreement ?? '') }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label"><strong>DEFINITIVE :</strong></label>
                    <textarea name="definitive" class="form-control" id="exampleFormControlTextarea1" rows="3">{{ old('definitive', $list[0]->definitive ?? '') }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label"><strong>OPERATING SYSTEM :</strong></label>
                    <textarea name="operating_system" class="form-control" id="exampleFormControlTextarea1" rows="3">{{ old('operating_system', $list[0]->operating_system ?? '') }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label"><strong>FEATURE SYSTEM :</strong></label>
                    <textarea name="feature_system" class="form-control" id="exampleFormControlTextarea1" rows="3">{{ old('feature_system', $list[0]->feature_system ?? '') }}</textarea>
                </div>
            </div>
            <input type="hidden" name="id" value="{{ old('id', $list[0]->id ?? '') }}">
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>