<?php include('dashboardHeader.php'); ?>
<style>
  #table-body .col {
    padding-top: 0.3rem !important;
    padding-bottom: 0.3rem !important;
  }

  .calendar-header {
    background-color: rgba(18, 15, 25, 0.25);
    height: 100%;
    padding: 60px;
    color: #fff;
    font-weight: 300;
    position: relative;
  }

  .header-background {
    background-image: url(https://raw.githubusercontent.com/JustMonk/codepen-resource-project/master/img/compressed-header.jpg);
    height: 180px;
    background-position: center right;
    background-size: cover;
  }

  .calendar-footer {
    height: 200px;
    font-weight: 300;
    text-align: center;
    background-color: rgb(10, 187, 181) !important;
    position: relative;
    overflow: hidden;
  }

  .addEvent {
    box-shadow: 0 0px 0px rgb(57, 168, 228) !important;
    /* background-color: #39a8e4; */
    padding: 10px;
    padding-left: 3em;
    padding-right: 3em;
    cursor: pointer;
    border-radius: 25px;
    color: #fff;
    /* background-image: linear-gradient(135deg, #8d8dd4, #45ced4); */
    background: #ffff !important;
    color: black !important;
  }

  .calendar-content {
    background-color: #fff;
    padding: 20px;
    padding-left: 3%;
    padding-right: 3%;
    overflow: hidden;
  }

  @media (min-width:768px) {
    .calendarDashboard {
      min-width: 400px;
    }
  }

  .sidebar-title {
    background-color: #ffff !important;
  }

  @media (max-width:768px) {
    .calendarDashboard {
      max-width: 400px !important;
      width: 100% !important;
    }
  }
</style>
<div class="pr-0 px-xl-0 px-4 pr-xl-5 w-full mt-5 pr5">
  
  <div class="flex justify-content-between items-start flex-xxl-nowrap-custom flex-wrap-custom pl10" style="gap:10px;">
    <div class="col-xxl-custom  shadow rounded p-5 w-full">
      <div class=" flex justify-content-between flex-col " style="margin-top: 0px; margin-bottom:0px;">
        <div class="flex justify-content-between align-items-center gap-2 pb-4">
          <h1 class="font-weight-bold text-left grad-text noto line-normal  ">
           Status
          </h1>
          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-notebook grad-svg" width="55" height="55" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M6 4h11a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-11a1 1 0 0 1 -1 -1v-14a1 1 0 0 1 1 -1m3 0v18" />
            <line x1="13" y1="8" x2="15" y2="8" />
            <line x1="13" y1="12" x2="15" y2="12" />
          </svg>
        </div>
       
        <h3 class="text-left border-bottom flex items-center gap2 pb-5 mt-1 noto">
          <!-- <svg xmlns="http://www.w3.org/2000/svg" class="icon mb-1 icon-tabler icon-tabler-calendar-time book-svg" width="30" height="30" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M11.795 21h-6.795a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v4" />
            <circle cx="18" cy="18" r="4" />
            <path d="M15 3v4" />
            <path d="M7 3v4" />
            <path d="M3 11h16" />
            <path d="M18 16.496v1.504l1 1" />
          </svg> -->
          <i class="fa fa-calendar-plus mb-1"></i>
          <?php if($userData->status == '2'){
           echo ('Approved');
          }else{
            echo ('Not Approved');
          } ?>
        </h3>
      
       
      </div>
    </div>
    <div class="col-xxl-custom  shadow rounded p-5 w-full">
      <div class=" flex justify-content-between flex-col " style="margin-top: 0px; margin-bottom:0px;">
        <div class="flex justify-content-between align-items-center gap-2 pb-4">
          <h1 class="font-weight-bold text-left grad-text noto line-normal  ">
            Department
          </h1>
          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-notebook grad-svg" width="55" height="55" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M6 4h11a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-11a1 1 0 0 1 -1 -1v-14a1 1 0 0 1 1 -1m3 0v18" />
            <line x1="13" y1="8" x2="15" y2="8" />
            <line x1="13" y1="12" x2="15" y2="12" />
          </svg>
        </div>
        <h3 class="text-left border-bottom flex items-center gap2 pb-5 mt-1 noto">
        
          <i class="fa fa-calendar-plus mb-1"></i>
      <?php echo $department->name; ?>
        </h3>
      
       
      </div>
    </div>
 
  </div>

</div>
<div class="pr-0 px-xl-0 px-4 pr-xl-5 w-full mt-5 pr5">
  
  <div class="flex justify-content-between items-start flex-xxl-nowrap-custom flex-wrap-custom pl10" style="gap:10px;">
    <div class="col-xxl-custom  shadow rounded p-5 w-full">
      <div class=" flex justify-content-between flex-col " style="margin-top: 0px; margin-bottom:0px;">
        <div class="flex justify-content-between align-items-center gap-2 pb-4">
          <h1 class="font-weight-bold text-left grad-text noto line-normal  ">
            Pending Leave Requests
          </h1>
          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-notebook grad-svg" width="55" height="55" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M6 4h11a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-11a1 1 0 0 1 -1 -1v-14a1 1 0 0 1 1 -1m3 0v18" />
            <line x1="13" y1="8" x2="15" y2="8" />
            <line x1="13" y1="12" x2="15" y2="12" />
          </svg>
        </div>
        <h3 class="text-left border-bottom flex items-center gap2 pb-5 mt-1 noto">
      
          <i class="fa fa-calendar-plus mb-1"></i>
          <?php echo $pending_requests_count; ?>
        </h3>
      
       
      </div>
    </div>
    <div class="col-xxl-custom  shadow rounded p-5 w-full">
      <div class=" flex justify-content-between flex-col " style="margin-top: 0px; margin-bottom:0px;">
        <div class="flex justify-content-between align-items-center gap-2 pb-4">
          <h1 class="font-weight-bold text-left grad-text noto line-normal  ">
          Approved Leave Requests
          </h1>
          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-notebook grad-svg" width="55" height="55" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M6 4h11a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-11a1 1 0 0 1 -1 -1v-14a1 1 0 0 1 1 -1m3 0v18" />
            <line x1="13" y1="8" x2="15" y2="8" />
            <line x1="13" y1="12" x2="15" y2="12" />
          </svg>
        </div>
        <h3 class="text-left border-bottom flex items-center gap2 pb-5 mt-1 noto">
       
          <i class="fa fa-calendar-plus mb-1"></i>
          <?php echo $approved_requests_count; ?>
        </h3>
      
       
      </div>
    </div>
 
  </div>
  <div class="flex justify-content-between items-start flex-xxl-nowrap-custom flex-wrap-custom pl10" style="gap:10px;">
    <div class="col-xxl-custom  shadow rounded p-5 w-full">
      <div class=" flex justify-content-between flex-col " style="margin-top: 0px; margin-bottom:0px;">
        <div class="flex justify-content-between align-items-center gap-2 pb-4">
          <h1 class="font-weight-bold text-left grad-text noto line-normal  ">
            Rejected Leave Requests
          </h1>
          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-notebook grad-svg" width="55" height="55" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M6 4h11a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-11a1 1 0 0 1 -1 -1v-14a1 1 0 0 1 1 -1m3 0v18" />
            <line x1="13" y1="8" x2="15" y2="8" />
            <line x1="13" y1="12" x2="15" y2="12" />
          </svg>
        </div>
        <h3 class="text-left border-bottom flex items-center gap2 pb-5 mt-1 noto">
      
          <i class="fa fa-calendar-plus mb-1"></i>
          <?php echo $rejected_requests_count; ?>
        </h3>
      
       
      </div>
    </div>
   
 
  </div>

</div>
</div>
<!-- End -->
</div>
</div>
</div>
<?php include('footer.php'); ?>

<!-- End -->
</body>

</html>