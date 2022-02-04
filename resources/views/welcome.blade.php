@extends('layouts.kmutnb')

@section('content')
        <!---------------------------------------- mobile ---------------------------------------->
        <div class="edu2_main_bn_wrap ">
			<div id="owl-demo-main" class="owl-carousel owl-theme visible-xs">
				<div class="item">
					<figure>
                        <img src="{{ asset('/kmutnb/images/event_new/2022.png') }}"  alt=""/>
					</figure>
				</div>
				<div class="item">
					<figure>
						<img src="{{ asset('/kmutnb/images/event_new/14.jpg') }}" alt=""/>
					</figure>
				</div>
				<div class="item">
					<figure>
						<img src="{{ asset('/kmutnb/images/event_new/13.jpg') }}" alt=""/>
					</figure>
				</div>
                <div class="item">
					<figure>
						<img src="{{ asset('/kmutnb/images/event_new/15.jpg') }}" alt=""/>
					</figure>
				</div>
				<div class="item">
					<figure>
						<img src="{{ asset('/kmutnb/images/event_new/16.jpg') }}" alt=""/>
					</figure>
				</div>
			</div>
		</div>
        <!----------------------------------------end mobile ---------------------------------------->
        <!-------------------------------------------- pc -------------------------------------------->
        <div class="edu2_main_bn_wrap visible-lg  visible-md">
			<div id="owl-demo-main2" class="owl-carousel owl-theme">
				<div class="item">
					<figure>
                        <img  src="{{ asset('/kmutnb/images/event_new/2022.png') }}"style="height: 80vh;"  alt=""/>
					</figure>
				</div>
				<div class="item">
					<figure>
						<img src="{{ asset('/kmutnb/images/event_new/14.jpg') }}" style="height: 80vh;" alt=""/>
					</figure>
				</div>
				<div class="item">
					<figure>
						<img src="{{ asset('/kmutnb/images/event_new/13.jpg') }}" style="height: 80vh;" alt=""/>
					</figure>
				</div>
                <div class="item">
					<figure>
						<img src="{{ asset('/kmutnb/images/event_new/15.jpg') }}" style="height: 80vh;" alt=""/>
					</figure>
				</div>
				<div class="item">
					<figure>
						<img src="{{ asset('/kmutnb/images/event_new/16.jpg') }}" style="height: 80vh;" alt=""/>
					</figure>
				</div>
			</div>
		</div>
        <!------------------------------------------------------ end pc ------------------------------------------------------>
        <div class="kf_content_wrap ">
            <!--ABOUT UNIVERSITY START-->
    		<section>
    			<div class="container ">
    				<div class="row ">
    					<div class="col-md-6 ">
    						<div class="abt_univ_wrap ">
								<!-- HEADING 1 START-->
                                <br class="visible-lg  visible-md"><br class="visible-lg  visible-md">
								<div class="kf_edu2_heading1">
                                    
									<h5>About Our University</h5>
									<h3>ยินดีต้อนรับเข้าสู่ มหาวิทยาลัยเทคโนโลยีพระจอมเกล้าพระนครเหนือ</h3>
								</div>
								<!-- HEADING 1 END-->

								<div class="abt_univ_des">
									<p style="text-indent:40px;">กองกิจการนักศึกษา เป็นหน่วยงานที่ “ส่งเสริมการพัฒนานักศึกษา ทั้งในด้านร่างกาย สติปัญญา อารมณ์ สังคม และคุณธรรมจริยธรรม รวมทั้งจัดให้บริการ และสวัสดิการ เพื่อ ส่งเสริมให้นักศึกษามีความพร้อมในการศึกษาเล่าเรียน และจัดสภาพแวดล้อมของ มจพ. ที่เอื้อต่อการศึกษาและการพัฒนานักศึกษา”</p>
								</div>
    						</div>
    					</div>

    					<div class="col-md-6">
    						<div class="abt_univ_thumb">
    							<figure>
    								<img src="{{ asset('/kmutnb/images/content/ตึก.jpeg') }}" alt=""/>
    							</figure>
    						</div>
    					</div>

    				</div>
    			</div>
    		</section>
			

			<!--KF COURSES CATEGORIES WRAP START-->
			<section>
				<div class="container">
					<div class="row">
						<!-- HEADING 1 START-->
						<div class="col-md-4">
							<div class="kf_edu2_heading1">
								<h3>Our Content</h3>
							</div>
						</div>
						<!-- HEADING 1 END-->

						<div class="kf_edu2_tab_des">
							<div class="col-md-12">
								<!-- Tab panes -->
								<div class="tab-content">
									<div role="tabpanel" class="tab-pane fade in active" id="all">
										<!-- 1 Tab START  -->
										<div class="row margin-bottom">
                                            <!-- EDU COURSES WRAP START -->			
                                            <div class="col-md-4">
                                                <div class="edu2_cur_wrap">
                                                    <figure>
                                                        <img src="{{ asset('/kmutnb/images/content/1.jpg') }}" alt="">
                                                        <figcaption><a href="courses-detail.html">See More</a></figcaption>
                                                    </figure>
                                                    <div class="edu2_cur_des">
                                                        <h5><a href="#">กองทุนกู้ยืม เพื่อการศึกษา</a></h5>
                                                        <!-- <p style="text-indent:30px;font-size:15px;line-height: 1.6;">ส่งเสริมให้นักศึกษาทุกคนได้มีโอกาสเรียนต่อโดยเท่าเทียมกัน รวมทั้งเพื่อเป็นการเปิดโอกาสทางการศึกษา ให้แก่เยาวชนซึ่งดำเนินการช่วยเหลือนักศึกษาเกี่ยวกับการจัดสรรทุนการศึกษา แก่นักศึกษาของมหาวิทยาลัยอย่างต่อเนื่องเป็นประจำ ทุกภาคการศึกษา</p> -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="edu2_cur_wrap">
                                                    <figure>
                                                        <img src="{{ asset('/kmutnb/images/content/2.jpg') }}" alt="">
                                                        <figcaption><a href="courses-detail.html">See More</a></figcaption>
                                                    </figure>
                                                    <div class="edu2_cur_des">
                                                        <h5><a href="#">นักศึกษาวิชาทหาร รด.</a></h5>
                                                        <!-- <p style="text-indent:30px;font-size:15px;line-height: 1.6;">บุคคลซึ่งอยู่ในระหว่างเข้ารับการฝึกวิชาทหารตามหลักสูตรที่กระทรวงกลาโหมกำหนด ตามพระราชบัญญัติส่งเสริมการฝึกวิชาทหาร พ.ศ. 2503 เป็นกำลังพลสำรองของกองทัพไทย ภายใต้การควบคุมของ หน่วยบัญชาการรักษาดินแดน</p> <br> -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="edu2_cur_wrap">
                                                    <figure>
                                                        <img src="{{ asset('/kmutnb/images/content/3.jpg') }}" alt="">
                                                        <figcaption><a href="courses-detail.html">See More</a></figcaption>
                                                    </figure>
                                                    <div class="edu2_cur_des">
                                                        <h5><a href="#">บริการด้านสุขภาพในแก่นักศึกษาแบะบุคคลากร</a></h5>
                                                        <!-- <p style="text-indent:30px;font-size:15px;line-height: 1.6;">ให้บริการด้านสุขภาพกับนักศึกษา และบุคคลากรภายในมหาวิทยาลัย และบริการรักษาพยาบาล ด้านส่งเสริมสุขภาพ และป้องกันโรค ประกันอุบัติเหตุ และการควบคุมด้านโภชนาการของผู้ประกาอบการร้านค้า/พนักงานโรงอาหารภายใน</p><br> -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4" style="margin-top:10px;">
                                                <div class="edu2_cur_wrap">
                                                    <figure>
                                                        <img src="{{ asset('/kmutnb/images/content/4.jpg') }}" alt="">
                                                        <figcaption><a href="courses-detail.html">See More</a></figcaption>
                                                    </figure>
                                                    <div class="edu2_cur_des">
                                                        <h5><a href="#">ศูนย์รวมข่าวงาน</a></h5>
                                                        <!-- <p style="text-indent:30px;font-size:15px;line-height: 1.6;">“การประกอบอาชีพที่สุจริต ถือเป็นการปฏิบัติธรรม โดยขณะที่ทำงานก็จะทำให้เกิดประโยชน์ต่อตนเองและผู้อื่น เมื่อทำงานเสร็จไปเลิกงานก็คิดทบทวนว่ามีข้อดีหรือข้อบกพร่องควรแก้ไขอย่างไร</p> -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4" style="margin-top:10px;">
                                                <div class="edu2_cur_wrap">
                                                    <figure>
                                                        <img src="{{ asset('/kmutnb/images/content/5.jpg') }}" alt="">
                                                        <figcaption><a href="courses-detail.html">See More</a></figcaption>
                                                    </figure>
                                                    <div class="edu2_cur_des">
                                                        <h5><a href="#">กฎระเบียบข้อบังคับที่ควรรู้</a></h5>
                                                        <!-- <p style="text-indent:30px;font-size:15px;line-height: 1.6;">ควบคุมดูแลสอบสวนเพื่อพิจารณาลงโทษ การป้องปรามมิให้ นศ. กระทำความผิดการส่งเสริมอบรมจริยธรรมเป็นแนวทางแก้ไขต้นเหตุ ของปัญหาอันมีผลให้นักศึกษากระทำความ ผิดวินัยน้อยลง</p> -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4" style="margin-top:10px;">
                                                <div class="edu2_cur_wrap">
                                                    <figure>
                                                        <img src="{{ asset('/kmutnb/images/content/11.jpg') }}" alt="">
                                                        <figcaption><a href="courses-detail.html">See More</a></figcaption>
                                                    </figure>
                                                    <div class="edu2_cur_des">
                                                        <h5><a href="#">ปฏิทินกิจกรรม ประจำเดือน</a></h5>
                                                        <!-- <p style="text-indent:30px;font-size:15px;line-height: 1.6;">กิจกรรมนักศึกษา ถือว่าเป็นการให้โอกาสแก่นักศึกษาได้มีส่วนในการแสดงความสามารถ การตัดสินใจ การทำงาน การปรับปรุง บุคลิกภาพ การรู้จักการเป็นผู้นำ และผู้ตามที่ดีในสังคมของนักศึกษาเอง</p> -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4" style="margin-top:10px;">
                                                <div class="edu2_cur_wrap">
                                                    <figure>
                                                        <img src="{{ asset('/kmutnb/images/content/6.jpg') }}" alt="">
                                                        <figcaption><a href="courses-detail.html">See More</a></figcaption>
                                                    </figure>
                                                    <div class="edu2_cur_des">
                                                        <h5><a href="#">Knowledge Management</a></h5>
                                                        <!-- <p style="text-indent:30px;font-size:15px;line-height: 1.6;">“การจัดการความรู้” คือ เครื่องมือ เพื่อการบรรลุเป้าหมายอย่างน้อย 4 ประการไปพร้อมๆ กัน</p> -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4" style="margin-top:10px;">
                                                <div class="edu2_cur_wrap">
                                                    <figure>
                                                        <img src="{{ asset('/kmutnb/images/content/7.jpg') }}" alt="">
                                                        <figcaption><a href="courses-detail.html">See More</a></figcaption>
                                                    </figure>
                                                    <div class="edu2_cur_des">
                                                        <h5><a href="#">ประกันคุณภาพการศึกษา</a></h5>
                                                        <!-- <p style="text-indent:30px;font-size:15px;line-height: 1.6;">การบริหารคุณภาพในส่วนที่มุ่งทำให้เกิดความมั่นใจว่าจะบรรลุข้อกำหนดทางด้านคุณภาพ</p> -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4" style="margin-top:10px;">
                                                <div class="edu2_cur_wrap">
                                                    <figure>
                                                        <img src="{{ asset('/kmutnb/images/content/8.jpg') }}" alt="">
                                                        <figcaption><a href="courses-detail.html">See More</a></figcaption>
                                                    </figure>
                                                    <div class="edu2_cur_des">
                                                        <h5><a href="#">สาระน่ารู้ / ประชาสัมพันธ์</a></h5>
                                                        <!-- <p style="text-indent:30px;font-size:15px;line-height: 1.6;">รวบรวบข่าวสารประชาสัมพันธ์ สาระน่ารู้ เกร็ดความรู้รอบตัว สามารถติดตามได้ที่นี้.</p> -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4" style="margin-top:10px;">
                                                <div class="edu2_cur_wrap">
                                                    <figure>
                                                        <img src="{{ asset('/kmutnb/images/content/9.jpg') }}" alt="">
                                                        <figcaption><a href="courses-detail.html">See More</a></figcaption>
                                                    </figure>
                                                    <div class="edu2_cur_des">
                                                        <h5><a href="#">ศิษย์เก่า สัมพันธ์</a></h5>
                                                        <!-- <p style="text-indent:30px;font-size:15px;line-height: 1.6;">เป็นศูนย์กลางให้กับศิษย์เก่าและคณะ ในการแลกเปลี่ยนความรู้ ความคิดเห็น ประสบการณ์และเผยแพร่ข้อมูลข่าวสารกิจกรรมของศิษย์เก่า</p> -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4" style="margin-top:10px;">
                                                <div class="edu2_cur_wrap">
                                                    <figure>
                                                        <img src="{{ asset('/kmutnb/images/content/10.jpg') }}" alt="">
                                                        <figcaption><a href="courses-detail.html">See More</a></figcaption>
                                                    </figure>
                                                    <div class="edu2_cur_des">
                                                        <h5><a href="#">กิจกรรม / ชมรมต่างๆ</a></h5>
                                                        <!-- <p style="text-indent:30px;font-size:15px;line-height: 1.6;">พบการเปิดโลกกิจกรรม ความมันส์ ความสนุก ทุกชมรม ขนความมันส์มาให้ทุกปีที่ลานสวนปาล์ม คุณจะไม่พลาด ติดตามเราที่นี้</p> -->
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-4" style="margin-top:10px;">
                                                <div class="edu2_cur_wrap">
                                                    <figure>
                                                        <img src="{{ asset('/kmutnb/images/content/12.jpg') }}" alt="">
                                                        <figcaption><a href="courses-detail.html">See More</a></figcaption>
                                                    </figure>
                                                    <div class="edu2_cur_des">
                                                        <h5><a href="#">ดาวน์โหลดเอกสาร แบบฟอร์มต่างๆ</a></h5>
                                                        <!-- <p style="text-indent:30px;font-size:15px;line-height: 1.6;">แหล่งรวบรวมแบบฟอร์มเสนอโครงการ แบบฟอร์มขออนุมัติต่างๆ สามารถดาวน์โหลดได้ที่นี้ ฟรี</p><br> -->
                                                    </div>
                                                </div>
                                            </div>
										</div>
                                        <!-- <div class="view-all">
                                        	<a class="btn-3" href="#">View All Cources</a>
                                        </div> -->
									</div>
								</div>

							</div>
						</div>
						<!--EDU2 COURSES TAB WRAP END-->
					</div>
				</div>
			</section>
		</div>

		<!--EDU2 FOOTER WRAP START-->
		
        @endsection