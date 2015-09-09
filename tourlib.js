var introToPDFLint =  new Tour({
       steps: [
         {
           element: "input[name=title]",
           title: "Naming your Document ",
           content: "Click on The Title Box and type in the Title",
            },
               {
           element: "input[name=author]",
           title: "Authoring  your Document ",
           content: "Click on The Author Box and type in the Title",
            },
               {
           element: "#mceu_30",
           title: "Editing your Document ",
           content: "Click on The Document Body Box and type in the Title",
            },
            
            ]});
         introToPDFLint.init();
         introToPDFLint.start();