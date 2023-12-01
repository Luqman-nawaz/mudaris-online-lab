@extends('instructor/my_layouts.main')
 @section('main-section')
 <div class="content-wrapper" style="min-height: 1604.8px;">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Profile</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">Mudaris Online Lab</li>
                        <li class="breadcrumb-item active"><a href="{{route('profile')}}">User Profile</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-4">

                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle" src="img/avatar5.png" alt="User profile picture">
                            </div>
                            <h3 class="profile-username text-center">Ghulam Mujtaba<i class="fa-sharp fa-solid fa-user-pen ml-1"></i></h3>
                            <p class="text-muted text-center">Software Engineer</p>
                                <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                <b>Gender</b> <a class="float-right">Male</a>
                                </li>
                                <li class="list-group-item">
                                <b>Education</b> <a class="float-right">Bachelor</a>
                                </li>
                                <li class="list-group-item">
                                <b>@email</b> <a class="float-right">nonperfectman0@gmail.com</a>
                                </li>
                                </ul>
                                <hr>
                                <div class="row">
                                    <button id="editp" class="btn btn-primary btn-sm">Edit <i class="fa-sharp fa-solid fa-user-pen ml-1"></i></button>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">About Me</h3>
                        </div>

                        <div class="card-body">
                                <strong><i class="fas fa-book mr-1 mt-1"></i> Education</strong>
                                <p class="text-muted">
                                BS in Software Engineering From Riphah International University Islamabad.
                                </p>
                                <hr>
                                <strong><i class="fas fa-map-marker-alt mr-1 mt-1"></i> Location</strong>
                                <p class="text-muted">Islamabad</p>
                                <hr>
                                <strong><i class="fas fa-pencil-alt mr-1 mt-1"></i> Skills</strong>
                                <p class="text-muted">
                                <span class="tag tag-danger">UI Design</span>
                                <span class="tag tag-success">Coding</span>
                                <span class="tag tag-info">Javascript</span>
                                <span class="tag tag-warning">PHP</span>
                                <span class="tag tag-primary">Node.js</span>
                                </p>
                                <hr>
                                <strong><i class="fa-solid fa-square mr-1 mt-1"></i></i> Hobbies</strong>
                                <p class="text-muted">
                                <span class="tag tag-danger">Travelling</span>
                                <span class="tag tag-success">Cricket</span>
                                </p>
                                <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!--JS for Fome Popup-->
<script type="text/javascript">
    document.getElementById("editp").addEventListener("click", function() {
        document.querySelector(".popup").style.display = "flex";
    });
    document.querySelector(".popup .close").addEventListener("click", function() {
        document.querySelector(".popup").style.display = "none";
    });
</script>

<!--Edit Profile-->
<div class="popup">
        <div class="popup-content">
            <img src="img/close.png" class="close" alt="close">
                <div class="row userp justify-content-center form1"  >
                    <form id="profileForm" method="post" action=" " enctype="multipart/form-data">
                       
                        <div class="col">
                            <h2 class="mt-2"> <i class="fa-sharp fa-solid fa-user-pen ml-1"> </i>Edit Profile</h2><br>
                        </div>
                        <div class="form-group">
                        <div class="col">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle" src="img/avatar5.png" alt="User profile picture">
                                <input type="file" name="profile_pic">
                            </div>
                        </div>
                        <hr>
                        <label>Name</label><br>
                        <input class="form-control w-200" type="text" required>
                        <br>
                        <label>Gender</label><br>
                        <select>
                            <option value="male" selected>Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>
                        <br>
                        <label>Education</label><br>
                        <input class="form-control w-200" type="text" required>
                        <br>
                        <label>email</label><br>
                        <input class="form-control w-200" type="text" required>
                       <div class="row justify-content-end">
                        <div class="col-2">
                        <button type="submit" class="btn btn-primary mr-4">Cancel </button>
                        </div>
                        <div class="col-2">
                        <button type="submit" class="btn btn-primary">Create </button>
                        </div>
                       </div>

                    </form>
            </div>
        </div>
</div>
 @endsection()