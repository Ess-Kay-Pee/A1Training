  <style>
   #ebooks:hover{
	   overflow: auto;
   }
   </style>
   <!--jason script-->
	<script type="text/javascript" src="json/syllabus.json"></script>
    <script type="text/javascript" src="json/pdf-interview-q-ans.json"></script>
	<section>
        <!-- WEB SECTION -->
		
		<script language = "javascript" >
						for(i in myObj.syllabus){
        document.writeln('<div id="'+ myObj.syllabus[i].id +'" class="modal fade" role="dialog">');
            document.writeln('<div class="log-in-pop">');
                document.writeln('<div class="log-in-pop-left" style="padding: 5.5% 6%;">');
                            document.writeln('<div class="ho-ev-latest in-ev-latest-bg-1">');
                                document.writeln('<div class="ho-lat-ev">');
                                    document.writeln('<a href="#">');
                                        document.writeln('<h4>Interview(Q&A) Section</h4>');
                                        document.writeln('<a type="button" href="interview/index.html" class="btn-success" target="_blank" style="padding:15px;border-radius:6px">View Now</a>');
                                document.writeln('</div>');
                            document.writeln('</div>');
							document.writeln('<div class="ho-ev-latest in-ev-latest-bg-1">');
                                document.writeln('<div class="ho-lat-ev">');
                                    document.writeln('<a href="#">');
                                        document.writeln('<h4>Check Our All Courses</h4>');
                                        document.writeln('<a type="button" href="all-courses.php" class="btn-success" target="_blank" style="padding:15px;border-radius:6px">');
										document.writeln('View Now</a>');                                   
										document.writeln('</a>');
                                
                                document.writeln('</div>');
                            document.writeln('</div>');
                            
                document.writeln('</div>');
                document.writeln('<div class="log-in-pop-right">');
                    document.writeln('<a href="#" class="pop-close" data-dismiss="modal"><img src="images/cancel.png" alt="" />');
                    document.writeln('</a>');
					
                    document.writeln('<ul id="ebooks" style="height:450px;">');
					for (j in myObj.syllabus[i].pdf) {
                                document.writeln('<li>');
									document.writeln('<div class="ed-rese-grid">');									
										document.writeln('<div class="ed-rsear-dec">');
											document.writeln('<h4><a href="images/syllabus/'+myObj.syllabus[i].pdf[j] +'" target="_blank">'+myObj.syllabus[i].heading[j] +'</a></h4>');
											
											document.writeln('<div class="ed-flag"><a href="images/syllabus/'+myObj.syllabus[i].pdf[j] +'" target="_blank">');
											document.writeln('<img src="images/icon/download.png"/></a></div>');
										document.writeln('</div>');
									document.writeln('</div>');
                                document.writeln('</li>');
                                }
                            document.writeln('</ul>');
                document.writeln('</div>');
            document.writeln('</div>');
        document.writeln('</div>');
		
}

</script>
    </section>
<!--e-books for interview q and ans-->
<section>
        <!-- WEB SECTION -->
		
		<script language = "javascript" >
						for(i in interview.ebooks){
        document.writeln('<div id="'+ interview.ebooks[i].id +'" class="modal fade" role="dialog">');
            document.writeln('<div class="log-in-pop">');
                document.writeln('<div class="log-in-pop-left" style="padding: 5.5% 6%;">');
                            document.writeln('<div class="ho-ev-latest in-ev-latest-bg-1">');
                                document.writeln('<div class="ho-lat-ev">');
                                    document.writeln('<a href="#">');
                                        document.writeln('<h4>Interview(Q&A) Section</h4>');
                                        document.writeln('<a type="button" href="interview/index.html" class="btn-success" target="_blank" style="padding:15px;border-radius:6px">View Now</a>');
                                document.writeln('</div>');
                            document.writeln('</div>');
							document.writeln('<div class="ho-ev-latest in-ev-latest-bg-1">');
                                document.writeln('<div class="ho-lat-ev">');
                                    document.writeln('<a href="#">');
                                        document.writeln('<h4>Check Our All Courses</h4>');
                                        document.writeln('<a type="button" href="all-courses.php" class="btn-success" target="_blank" style="padding:15px;border-radius:6px">');
										document.writeln('View Now</a>');                                   
										document.writeln('</a>');
                                
                                document.writeln('</div>');
                            document.writeln('</div>');
                            
                document.writeln('</div>');
                document.writeln('<div class="log-in-pop-right">');
                    document.writeln('<a href="#" class="pop-close" data-dismiss="modal"><img src="images/cancel.png" alt="" />');
                    document.writeln('</a>');
					
                    document.writeln('<ul id="ebooks" style="height:450px;">');
					for (j in interview.ebooks[i].pdf) {
                                document.writeln('<li>');
									document.writeln('<div class="ed-rese-grid">');									
										document.writeln('<div class="ed-rsear-dec">');
											document.writeln('<h4><a href="images/e-books/pdf-interview/'+interview.ebooks[i].pdf[j] +'" target="_blank">'+interview.ebooks[i].heading[j] +'</a></h4>');
											
											document.writeln('<div class="ed-flag"><a href="images/e-books/pdf-interview/'+interview.ebooks[i].pdf[j] +'" target="_blank">');
											document.writeln('<img src="images/icon/download.png"/></a></div>');
										document.writeln('</div>');
									document.writeln('</div>');
                                document.writeln('</li>');
                                }
                            document.writeln('</ul>');
                document.writeln('</div>');
            document.writeln('</div>');
        document.writeln('</div>');
		
}

</script>
    </section>