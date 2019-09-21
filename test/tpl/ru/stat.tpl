{strip}
<section class='about2'>
    <div class="container">
        <div class="row">
          <h1 style='font-size:12px;'>Investments</h1>
          <div class="clearfix"></div>
          <br>
          <div class="col-md-5">
            <link href='css/ion.calendar.css' rel='stylesheet' />
            <script src="js/moment.min.js"></script>

            <script src="js/ion.calendar.js"></script>
            <script>
                  $(function(){
                    $("#calendar-1").ionCalendar({

                        sundayFirst: false,
                        years: "2014-2015",
                        format: "DD.MM.YYYY",
                         onReady:function(date){
                          checkCalendar();
                      }


                    });
                    checkCalendar();
                    function checkCalendar()
                    {
                      $.each(data_percent1, function(index, val)
                        {
                        $('.ic__day>div>span[data-day="'+val[2]+'"][data-month="'+val[1]+'"][data-year="'+val[0]+'"]').html(val[3]+'<small>%</small>').parent().parent().addClass('with_percent');

                        });
                    }

                  });

            </script>
            <div id='calendar-1'></div>
          </div>
          <div class="col-md-7">
            <a href="/investments" class="btn  btn-other btn-small btn-num-1"> <span> <i class="icon icon-user"></i> </span>more info</a>
            <h3 style='text-align:left;'>Ronex Independent Corporation investment plans</h3>
            <p style='color:#fff'>
              In <b>Ronex Independent Corporation</b> we have developed an investment plan with a 90 day investment period and a floating interest rate. After 30 days our clients are entitled to withdraw the deposited amount in full.
          </p>
            <ul class="stat">
              <li>
                <div>
                  <span>current percent</span>
                  <b class='today-profit2'></b>
                  <a><i class="icon icon-clock"></i></a>
                </div>
              </li>
              <li>
                <div>
                  <span>Min. deposit</span>
                  <b>$30</b>
                  <a><i class="icon icon-deposit"></i></a>
                </div>
              </li>
              <li>
                <div>
                  <span>Investment period </span>
                  <b>90 <small>days</small></b>
                  <a><i class="icon icon-account"></i></a>
                </div>
              </li>
            </ul>
            <div class="clearfix"></div>
            <h3>Daily profits </h3>
            <div class="demo-container demo-container-3">
                  <div id="days-percent" style="min-width: 310px; height: 190px;" ></div>
            </div>
            <div class="clearfix"></div>
            <br/>
            <br/>
          </div>
          <div class="clearfix"></div>
        </div>
    </div>
</section>
{/strip}