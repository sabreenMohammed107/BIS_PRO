@extends('layout.main')

@section('breadcrumb')
    <div class="toolbar" id="kt_toolbar">
        <div class="container-fluid d-flex flex-stack flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex flex-column align-items-start justify-content-center flex-wrap me-2">
                <!--begin::Title-->
                <h1 class="text-dark fw-bolder my-1 fs-2">Results</h1>
                <!--end::Title-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb fw-bold fs-base my-1">
                    <li class="breadcrumb-item text-muted">
       <a href="{{route('admin.home')}}" class="text-muted text-hover-primary">Home</a>
                    </li>
                    <li class="breadcrumb-item text-muted">Results</li>

                    <li class="breadcrumb-item text-dark">All</li>
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Info-->

        </div>
    </div>
@endsection

@section('content')
    <!--begin::Post-->
    <div class="post fs-6 d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div class="container-xxl">
            <form id="kt_ecommerce_add_category_form" class="form d-flex flex-column flex-lg-row"
                action="{{ route('student-result.store') }}" method="post" enctype="multipart/form-data">
                @csrf

                <!--begin::Main column-->
                <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                    <!--begin::General options-->
                    <div class="card card-flush py-4">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <div class="card-title">
                                <h2>General</h2>
                            </div>
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">

                        <div class="mb-3">
                            <label class="fs-6 fw-bold form-label mt-3">
                                <option value="">Select Student..</option>
                            </label>
                            <!--end::Label-->
                            <select required class="form-select form-select-solid dynamic"
                                data-control="select2" data-placeholder="Select an option" required
                                data-show-subtext="true" name="user_id" data-live-search="true" id="user_id"
                                data-dependent="sub">
                                <option value=""></option>
                                @foreach ($students as $student)
                                    <option value="{{ $student->id }}" {{ $row->user_id == $student->id ? "selected" :""}} >{{ $student->name ?? '' }}
                                    </option>
                                @endforeach
                            </select>
                    </div>
                        <div class="mb-3">
                            <label class="fs-6 fw-bold form-label mt-3">
                                <option value="">Select Level..</option>
                            </label>
                            <!--end::Label-->
                            <select required class="form-select form-select-solid dynamic"
                                data-control="select2" data-placeholder="Select an option" required
                                data-show-subtext="true" name="level_id" data-live-search="true" id="level_id"
                                data-dependent="sub">
                                <option value=""></option>
                                @foreach ($levels as $level)
                                    <option value="{{ $level->id }}" {{ $row->level_id == $level->id ? "selected" :""}} >{{ $level->name ?? '' }}
                                    </option>
                                @endforeach
                            </select>
                    </div>

                    <div class="mb-3">
                        <label class="fs-6 fw-bold form-label mt-3">
                            <option value="">Select semester..</option>
                        </label>
                        <!--end::Label-->
                        <select required class="form-select form-select-solid dynamic"
                            data-control="select2" data-placeholder="Select an option" required
                            data-show-subtext="true" name="semester_id" data-live-search="true" id="semester_id"
                            data-dependent="sub">
                            <option value=""></option>
                            @foreach ($semesters as $semester)
                                <option value="{{ $semester->id }}" {{ $row->semester_id == $semester->id ? "selected" :""}} >{{ $semester->semesters ?? '' }}
                                </option>
                            @endforeach
                        </select>
                </div>
                <div class="mb-3">
                    <label class="fs-6 fw-bold form-label mt-3">
                        <option value="">Select type..</option>
                    </label>
                    <!--end::Label-->
                    <select required class="form-select form-select-solid dynamic"
                        data-control="select2" data-placeholder="Select an option" required
                        data-show-subtext="true" name="exam_type_id" data-live-search="true" id="exam_type_id"
                        data-dependent="sub">
                        <option value=""></option>
                        @foreach ($types as $type)
                            <option value="{{ $type->id }}" {{ $row->exam_type_id == $type->id ? "selected" :""}} >{{ $type->type ?? '' }}
                            </option>
                        @endforeach
                    </select>
            </div>

            <div class="mb-3">
                <label class="form-label">value</label>
                <input  name="result_value" value="{{ $row->result_value }}"
                    class="form-control @error('result_value') is-invalid @enderror">
                @error('result_value')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Color</label>
                <select required class="form-select form-select-solid dynamic"
                data-control="select2" data-placeholder="Select an option" required
                data-show-subtext="true" name="result_color" data-live-search="true" id="country"
                data-dependent="sub">
                <option value="blue" {{ $row->result_color == 'blue' ? "selected" :""}} >Blue</option>
                <option value="green" {{ $row->result_color == 'green' ? "selected" :""}} >Green</option>
                <option value="yallow" {{ $row->result_color == 'yallow' ? "selected" :""}} >Yallow</option>
                <option value="red" {{ $row->result_color == 'red' ? "selected" :""}} >Red</option>
            </select>
            </div>
                        </div>
                        <!--end::Card header-->
                    </div>
                    <!--end::General options-->


                    <div class="d-flex justify-content-end">
                        <!--begin::Button-->
                        <a href="{{ route('student-result.index') }}" id="kt_ecommerce_add_product_cancel"
                            class="btn btn-light me-5">Cancel</a>
                        <!--end::Button-->
                        <!--begin::Button-->
                        <button type="submit" id="kt_ecommerce_add_category_submit" class="btn btn-primary">
                            <span class="indicator-label">Save Changes</span>
                            <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                        <!--end::Button-->
                    </div>
                </div>
                <!--end::Main column-->
            </form>
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->
@endsection
