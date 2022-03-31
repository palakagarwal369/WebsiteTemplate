<style>
*{
    font-family: 'Roboto', sans-serif;
}
/*-----------------
navbar
-------------------*/
.bgnav{
    background: transparent;
    transition: 0.2s ease;
}
.bgnav.scrolled{
    background: rgba(0, 53, 70);
}
.navbar .navbar-brand{
    font-weight: normal;
    font-size: 22px;
    color: white;
}

.navbar .navbar-nav .nav-link{
    font-weight: normal;
    font-size: 15px;
    padding: 0;
    color: white;
    margin-left: 12px;
}
.navbar .navbar-nav .nav-link:hover{
    background: transparent;
    color: #ffffff;
}
.navbar .navbar-nav .nav-link::after{
    content: "";
    display: block;
    width: 0;
    height: 2px;
    background: transparent;
    transition: width 0.3s ease, background-color 0.3s ease;
}
.navbar .navbar-nav .nav-link:hover::after{
    width: 100%;
    background: #ffffff;
    color: #ffffff;
}
/*---------------
home
----------------*/
.home{
    background-image:
    linear-gradient(rgba(0, 53, 70, 0.93), rgba(0, 53, 70, 0.93)), url("https://media.istockphoto.com/photos/were-always-hungry-for-success-picture-id1330547182?b=1&k=20&m=1330547182&s=170667a&w=0&h=r363z4sXEp6Yg6E2YD_JUZQhtTgq-38-9oxfm5tQGug=");
    position: relative;  
    height: 100%;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;  
    color: white;
    padding-bottom: 50px;

}
.topic{
    color: rgb(3, 3, 83);
    font-size: 3vw;
    font-weight: bold;
}
.logo{
    height: 60px;
    width: 60px;
    margin-top: 8px;
    margin-bottom: 13px;
    
}
/*.icn{
    width: 60px;
    background: whitesmoke;
    border-radius: 44% 45% 15% 10% / 34% 23% 32% 31% ;
}*/
.card-title{
    color: rgb(10, 10, 104);
    font-size: 18px;
    font-weight: bold;
    
}
.card-text{
    color: rgb(85, 85, 85);
}
.ser2{
    background: rgb(221, 243, 250);
    border-radius: 70% 0% 0% 0% / 11% 0% 0% 1% ;
}
.card{
    box-shadow: 0px 4px 8px 0px rgba(15, 47, 117, 0.2), 0 6px 20px 0 rgba(15, 47, 117, 0.2);
}
@keyframes stretch {
    /* declare animation actions here */ 0% {
    width: 0;
}
100% {
    width: 50%;
  }
}
.ani{
    animation-name: stretch;
  animation-duration: 1.5s; 
  animation-timing-function: ease-out; 
  animation-delay: 0s;
  animation-iteration-count: infinite;
  animation-fill-mode: none;
  animation-play-state: running; 
  animation-direction: alternate;
}

</style>

<!-----------------------------------home---------------------------------------------->
<section class="home" style="padding-bottom: 0px;padding-top: 170px;">
        <div class="container" style="text-align: center; color: whitesmoke;padding-bottom: 50px;">
            <h1 style="font-weight: bold;font-size: 6.5vw;">Services</h1>
            <p><span style="font-style: italic;"> You are looking at the best service providers since 2010</span></p>
        </div>
    </section>
    <!------------------------------------------------------------------------------------->
    <!-------------------------------------services---------------------------------------->

    <section class="ser1" style="margin-top: 70px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="container" style="max-width: 500px;font-family: 'Merriweather', serif;">
                        <span style="color: rgb(62, 62, 248); font-size: 18px; font-family: 'Merriweather', serif;">Discussions</span>
                        <div class="topic" style="font-family: 'Merriweather', serif;">
                            Establish a<br> knowledge hub.
                            <div class="ani" style="height: 7px; width: 20%;; background: rgb(29, 29, 102); margin-bottom: 20px;"></div>
                        </div>
                        <div>
                            Discussion enables focused collobaration amgonst project members to facilitate meaningful
                            decision making.
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="container">
                        <div class="row" style="margin-bottom: 15px;">
                            <div class="col-sm-12">
                                <div class="card" style="background: rgb(237, 247, 255);border: none;">
                                    <div class="icn"><img class="logo" src="<?php echo base_url();?>png/services/png/002-smart-watch.png"></div>
                                    <div class="card-body">
                                        <h5 class="card-title">Project Overview</h5>
                                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Hic reiciendis?</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card" style="background: rgb(197, 210, 221);">
                                    <div class="card-body">
                                        <div class="icn"><img class="logo" src="<?php echo base_url();?>png/services/png/004-email.png"></div>
                                        <h5 class="card-title">Facilitate Ideas</h5>
                                        <p class="card-text">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic reiciendis?
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="col-md-3">
                    <div class="container">
                        <div class="row" style="margin-bottom: 15px;">
                            <div class="col-sm-12">
                                <div class="card" style="background: rgb(193, 220, 241);">
                                    <div class="card-body">
                                        <div class="icn"><img class="logo" src="<?php echo base_url();?>png/services/png/001-gear.png"></div>
                                        <h5 class="card-title">Create Threads</h5>
                                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Hic reiciendis?</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card" style="background: rgb(142, 163, 180);">
                                    <div class="card-body">
                                        <div class="icn"><img class="logo" src="<?php echo base_url();?>png/services/png/003-paper-plane.png"></div>
                                        <h5 class="card-title">Share Files</h5>
                                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Hic reiciendis?</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!------------------------------------------------------------------------------------->
    <!-------------------------------------services---------------------------------------->

    <section class="ser2" style="margin-top: 70px;">
        <div class="container" style="padding-top:60px;padding-bottom:80px">
            <div class="row">
                <div class="col-md-6">
                    <div class="container" style="max-width: 500px;font-family: 'Merriweather', serif;">
                        <span style="color: rgb(62, 62, 248); font-size: 18px;font-family: 'Merriweather', serif;">PROJECT</span>
                        <div class="topic" style="font-family: 'Merriweather', serif;">
                            Project milestones automated status reporting.
                            <div class="ani" style="height: 7px; width: 20%;; background: rgb(29, 29, 102); margin-bottom: 20px; "></div>
                        </div>
                        <div>
                            Milestone serve as your visual project guide by automating process trackung based on task
                            completion.
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="container">
                        <div class="row" style="margin-bottom: 15px;">
                            <div class="col-sm-12">
                                <div class="card">
                                    <img class="logo" src="<?php echo base_url();?>png/services/png/002-folder.png" style="margin-left:13px;">
                                    <div class="card-body">
                                        <h5 class="card-title">Timeline View</h5>
                                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Hic reiciendis?</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-bottom: 15px;">
                            <div class="col-sm-12">
                                <div class="card">
                                    <img class="logo" src="<?php echo base_url();?>png/services/png/002-trolley.png" style="margin-left:13px;">
                                    <div class="card-body">
                                        <h5 class="card-title">Self Dependencies</h5>
                                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Hic reiciendis?</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-body">
                                        <img class="logo" src="<?php echo base_url();?>png/services/png/001-shopping-cart.png">
                                        <h5 class="card-title">Custom Lables</h5>
                                        <p class="card-text">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic reiciendis?
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="container">
                        <div class="row" style="margin-bottom: 15px;">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-body">
                                        <img class="logo" src="<?php echo base_url();?>png/services/png/003-bar-graph.png">
                                        <h5 class="card-title">Milestone Progress</h5>
                                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Hic reiciendis?</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-bottom: 15px;">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-body">
                                        <img class="logo" src="<?php echo base_url();?>png/services/png/001-box.png">
                                        <h5 class="card-title">Recurrsive Mileston</h5>
                                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Hic reiciendis?</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-body">
                                        <img class="logo" src="<?php echo base_url();?>png/services/png/004-microsoft.png">
                                        <h5 class="card-title">Collobarative docs</h5>
                                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Hic reiciendis?</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!------------------------------------------------------------------------------------->