@extends('admin.layouts.adminmain')
@section('admincontent')
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Settings</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form action="{{ route('updateSettings') }}" class="form-image-upload" method="POST"
                              enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <!--<div class="form-group">-->
                            <!--    <strong>Nav Icon</strong>-->
                            <!--    <input type="file" name="nav_icon" class="form-control"-->
                            <!--           placeholder="Plese Choose Icon">-->
                            <!--</div>-->
                            <div class="form-group">
                                <strong>Company Name</strong>
                                <input type="text" name="company_name" class="form-control"
                                       value="{{$settings->company_name}}" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <strong>Location</strong>
                                <input type="text" name="company_location" value="{{$settings->company_location}}"
                                       class="form-control"
                                       placeholder="Company Address">
                            </div>
                            <div class="form-group">
                                <strong>Email</strong>
                                <input type="text" name="email" value="{{$settings->email}}" class="form-control"
                                       placeholder="Company Email">
                            </div>
                            <div class="form-group">
                                <strong>Phone Number</strong>
                                <input type="text" name="phone_number" value="{{$settings->phone_number}}"
                                       class="form-control"
                                       placeholder="Company Phone Number">
                            </div>
                            <div class="form-group">
                                <strong>Client</strong>
                                <input type="text" name="client" value="{{$settings->client}}"
                                       class="form-control"
                                       placeholder="Client">
                            </div>
                            <div class="form-group">
                                <strong>Years Completed</strong>
                                <input type="text" name="years" value="{{$settings->years}}"
                                       class="form-control"
                                       placeholder="Years">
                            </div>
                            <div class="form-group">
                                <strong>Type of Service</strong>
                                <input type="text" name="types" value="{{$settings->types}}"
                                       class="form-control"
                                       placeholder="Service Type">
                            </div>
                            <div class="form-group">
                                <strong>Architect</strong>
                                <input type="text" name="architect" value="{{$settings->architect}}"
                                       class="form-control"
                                       placeholder="Architect">
                            </div>

                        </br>
                            <h1><span>Social</span></h1>
                            <div class="form-group">
                                <strong>Facebook</strong>
                                <input type="text" name="facebook" value="{{$settings->facebook}}" class="form-control"
                                       placeholder="FacebookURL">
                            </div>
                            <div class="form-group">
                                <strong>Twitter</strong>
                                <input type="text" name="twitter" value="{{$settings->twitter}}" class="form-control"
                                       placeholder="TwitterURL">
                            </div>
                            <div class="form-group">
                                <strong>LinkedIn</strong>
                                <input type="text" name="linkedin" value="{{$settings->linkedin}}" class="form-control"
                                       placeholder="LinkedInURL">
                            </div>
                            <div class="form-group">
                                <strong>Youtube</strong>
                                <input type="text" name="youtube" value="{{$settings->youtube}}" class="form-control"
                                       placeholder="YoutubeURL">
                            </div>
                            <div class="form-group">
                                <strong>Instagram</strong>
                                <input type="text" name="instagram" value="{{$settings->instagram}}"
                                       class="form-control"
                                       placeholder="InstagramURL">
                            </div>

                        </br>
                            <h1><span>Frontend texts</span></h1>
                            <div class="form-group">
                                <strong>TECHNOLOGY WE'RE EXPERTISE IN</strong>
                                <input type="text" name="technologytext" value="{{$settings->technologytext}}" class="form-control"
                                       placeholder="technologytext">
                            </div>
                            <div class="form-group">
                                <strong>OUR TEAM</strong>
                                <input type="ourteamtext" name="ourteamtext" value="{{$settings->ourteamtext}}" class="form-control"
                                       placeholder="ourteamtext">
                            </div>
                            <div class="form-group">
                                <strong>Who Are We ?</strong>
                                <input type="text" name="whyus" value="{{$settings->whyus}}" class="form-control"
                                       placeholder="whyus">
                            </div>
                            <div class="form-group">
                                <strong>Successful Projects</strong>
                                <input type="text" name="projects" value="{{$settings->projects}}" class="form-control"
                                       placeholder="projects">
                            </div>


                        </br>
                            <h1><span>Counters</span></h1>

                            {{-- counter  --}}
                            <div class="form-group">
                                <strong>Counter 1 Name</strong>
                                <input type="text" name="countname1" value="{{$settings->countname1}}"
                                       class="form-control"
                                       placeholder="">
                            </div>
                            <div class="form-group">
                                <strong>Counter 1 icon</strong>
                                <input type="text" name="counticon1" value="{{$settings->counticon1}}"
                                       class="form-control"
                                       placeholder="{{$settings->counticon1}}">
                            </div>
                            <div class="form-group">
                                <strong>Counter 1 value</strong>
                                <input type="number" name="count1" value="{{$settings->count1}}"
                                       class="form-control"
                                       placeholder="{{$settings->count1}}">
                            </div>
                            <div class="form-group">
                                <strong>Counter 2 name</strong>
                                <input type="text" name="countname2" value="{{$settings->countname2}}"
                                       class="form-control"
                                       placeholder="{{$settings->countname2}}">
                            </div>
                            <div class="form-group">
                                <strong>Counter 2 icon</strong>
                                <input type="text" name="counticon2" value="{{$settings->counticon2}}"
                                       class="form-control"
                                       placeholder="{{$settings->counticon2}}">
                            </div>
                            <div class="form-group">
                                <strong>Counter2 Value</strong>
                                <input type="number" name="count2" value="{{$settings->count2}}"
                                       class="form-control"
                                       placeholder="{{$settings->count2}}">
                            </div>
                            <div class="form-group">
                                <strong>Counter 3 name</strong>
                                <input type="text" name="countname3" value="{{$settings->countname3}}"
                                       class="form-control"
                                       placeholder="{{$settings->countname3}}">
                            </div>
                            <div class="form-group">
                                <strong>Counter 3 icon</strong>
                                <input type="text" name="counticon3" value="{{$settings->counticon3}}"
                                       class="form-control"
                                       placeholder="{{$settings->counticon3}}">
                            </div>
                            <div class="form-group">
                                <strong>Counter 3 value</strong>
                                <input type="number" name="count3" value="{{$settings->count3}}"
                                       class="form-control"
                                       placeholder="{{$settings->count3}}">
                            </div>
                            <div class="form-group">
                                <strong>Counter 4 name</strong>
                                <input type="text" name="countname4" value="{{$settings->countname4}}"
                                       class="form-control"
                                       placeholder="{{$settings->countname4}}">
                            </div>
                            <div class="form-group">
                                <strong>Counter 4 icon</strong>
                                <input type="text" name="counticon4" value="{{$settings->counticon4}}"
                                       class="form-control"
                                       placeholder="{{$settings->counticon4}}">
                            </div>
                            <div class="form-group">
                                <strong>Counter 4 value</strong>
                                <input type="number" name="count4" value="{{$settings->count4}}"
                                       class="form-control"
                                       placeholder="{{$settings->count4}}">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Save</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
