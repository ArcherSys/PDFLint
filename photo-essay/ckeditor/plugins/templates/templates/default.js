/*
 Copyright (c) 2003-2014, CKSource - Frederico Knabben. All rights reserved.
 For licensing, see LICENSE.md or http://ckeditor.com/license
*/

CKEDITOR.addTemplates("default",
                  
    {
                        
imagesPath:CKEDITOR.getUrl(CKEDITOR.plugins.getPath("templates")+"templates/images/"),
                       
 templates:[
                       
   {
                           
 title:"Image and Title",
                        
   image:"template1.gif",
                          
  description:"One main image with a title and text that surround the image.",
                    
    html:'<h3><img src=" " alt="" style="margin-right: 10px" height="100" width="100" align="left" />Type the title here</h3><p>Type the text here</p>'
},
                        
  {
title:"Strange Template",
image:"template2.gif",
description:"A template that defines two colums, each one with a title, and some text.",

html:'<table cellspacing="0" cellpadding="0" style="width:100%" border="0"><tr><td style="width:50%"><h3>Title 1</h3></td><td></td><td style="width:50%"><h3>Title 2</h3></td></tr><tr><td>Text 1</td><td></td><td>Text 2</td></tr></table><p>More text goes here.</p>'
},
{
title:"Text and Table",
image:"template3.gif",
description:"A title with some text and a table.",
html:'<div style="width: 80%"><h3>Title goes here</h3><table style="width:150px;float: right" cellspacing="0" cellpadding="0" border="1"><caption style="border:solid 1px black"><strong>Table title</strong></caption><tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr><tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr><tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr></table><p>Type the text here</p></div>'
},

                          
                        {
        
                  title: "Personal Narrative",
 
                         image: "template2.gif",
                        
  description: " A story that is about you.",
                      
    html:"<div class=\"personal-narrative\"><h1>Title</h1><p>Paragraph One</p><p>Paragraph Two</p><p>Paragraph Three</p><p>Paragraph Four</p><p>Paragraph Five</p><p>Paragraph Six</p><p>Paragraph Seven</p><p>Paragraph Eight</p></div>"
                  
      },
{
   title: "ISAP",
   image:"template3.gif",
   description: "Individualized Scout Advancement Plan",
   html: "<header id=\"header\"><img style=\"position: relative;left: 250px;\" src=\"/core/media/img/template-gfx/bsa-header.png\"></header><article><h2 style=\"text-align: center;\"><span style=\"font-size:24px\"><span style=\"font-family:arial,helvetica,sans-serif\"><strong>INDIVIDUAL SCOUT ACHIEVEMENT PLAN</strong></span></span></h2><p style=\"font-family:arial,helvetica,sans-serif;font-size:18px\"><span style=\"font-size:16px\"><span style=\"font-family:arial,helvetica,sans-serif\">The approval of alternative requirements or merit badges should be discussed with the Scout, parent or guardian, and unit leader. An agreement is reached and forwarded to the council advancement committee for approval <em>before</em> starting to work on the specific task. The ISAP is the basic plan that can be used for all Scouts to document proposed and approved alternative advancement requirements. The ISAP is modified by addendum. Additional information can be found in the <em>Guide to Advancement,</em> section 10.</span></span></p><p><span style=\"font-size:24px\"><span style=\"font-family:arial,helvetica,sans-serif\"><strong>INDIVIDUAL SCOUT ACHIEVEMENT PLAN for: <span contenteditable=\"true\"></span></strong></span></span></p><p><span style=\"font-size:20px\"><span style=\"font-family:arial,helvetica,sans-serif\">Scout&rsquo;s name _________________________________ Date of birth ______________</span></span></p><p><span style=\"font-size:20px\"><span contenteditable style=\"font-family:arial,helvetica,sans-serif\">Unit No. ________________ District ________________________________________</span></span></p><p><span style=\"font-family:arial,helvetica,sans-serif\"><strong>Statement of Belief: </strong>Though it is true every Scout must have the overall ability to fulfill BSA advancement requirements as written, members with a documented disability deserve the opportunity to utilize their remaining abilities to fulfill alternative requirements that represent the same challenge and essential outcome as those written. The only limitations for members with sufficient abilities to achieve approved alternative requirements should be their individual desire, focus, and perseverance.</span></p><p>&nbsp;</p><p><span style=\"font-family:arial,helvetica,sans-serif\"><strong>Objective:</strong> Scouting literature provides the requirements, policies and procedures, and related supporting content. It cannot address each individual Scout&rsquo;s abilities, but it can help those involved to reach an understanding as to how certain goals can be met. The ISAP is a road map that the Scout, his parent or guardian, mentors, and other leaders can reference and update as necessary.</span></p><p>&nbsp;</p><p><span style=\"font-family:arial,helvetica,sans-serif\"><strong>Methodology:</strong> Within reasonable guidelines, the ISAP will provide Scouts with the opportunity to achieve their personal goals and, through creative thinking and action, remove unnecessary barriers that may impede their advancement. This is done so as not to lessen the relative challenges of the Scouting experience and the primary goal of personal growth.</span></p><p>&nbsp;</p><p><span style=\"font-size:20px\"><span style=\"font-family:arial,helvetica,sans-serif\">I, __________________________________ (Scout&rsquo;s name), promise that on my honor, I will do my best in working toward my personal advancement goals.</span></span></p><p>&nbsp;</p><p><span style=\"font-size:20px\"><span style=\"font-family:arial,helvetica,sans-serif\">I am a (check one): <input name=\"Cub Scout\" type=\"checkbox\" value="Cub Scout\" />&nbsp;Cub Scout&nbsp; <input name=\"Boy Scout\" type=\"checkbox\" value=\"Boy Scout\" />&nbsp;Boy Scout&nbsp; <input name=\"Varsity Scout\" type=\"checkbox\" value=\"Varsity Scout\" />&nbsp;Varsity Scout&nbsp; <input name=\"Venturer\" type=\"checkbox\" value=\"Venturer\" />&nbsp;Venturer&nbsp; <input name=\"Sea Scout\" type=\"checkbox\" value=\"Sea Scout\" />&nbsp;Sea Scout</span></span></p><p>&nbsp;</p><p><span style=\"font-size:20px\"><span style=\"font-family:arial,helvetica,sans-serif\">Signed __________________________________________ Date ________________</span></span></p><p>&nbsp;</p><p><span style=\"font-size:20px\"><span style=\"font-family:arial,helvetica,sans-serif\">I, ___________________________ (leader&rsquo;s name), ________________ (title), promise to do my best to deliver upon the Statement of Belief, Objective, and Methodology expressed above.</span></span></p><p>&nbsp;</p><p><span style=\"font-size:20px\"><span style=\"font-family:arial,helvetica,sans-serif\">Signed __________________________________________ Date ________________</span></span></p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p></article>"
}
]});