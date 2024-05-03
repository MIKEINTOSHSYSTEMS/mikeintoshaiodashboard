//put login info in body class
$("document").ready(function() {
	function init_forum(){
	if($(".top_username").size() > 0){
		$("body").addClass("with_login_user");
	}
	if($(".empty_alert_notify").size() > 0){
		$("body").addClass("empty_alert_notify");
	}
	$(".skin_hover").click(function() {
		$.get("",{scheme:$(this).attr("color")},function(){
			window.location.reload();
		})
	});
    Runner.search.SearchForm.prototype.submitSearch = function() {
        if (this.pageObj.pageTable === "forumusers_admin" || typeof this.pageObj.advanced_search !=="undefined") {
            originalSubmitSearch.call(this);
            return;

        }
        var simpleQuery;
        this.fireEvent('beforeSearch', this, this.srchForm);
        this.srchForm.clearForm();
        this.srchForm.searchSubmit = true;

        //add the Simple Search params to the form
        simpleQuery = this.addSimpleQueryParams();
        //add the Search panel params to the form
        this.addAdvansedQueryParams(simpleQuery);
        //add the filters' params to the form
        this.addFilterParams();

        if (!Object.keys(this.srchForm.searchForm).length) {
            this.srchForm.addToSearchForm('a', 'return');
        }

        //add the search panel's criterion to the form
        this.addCriteriaParam();

        this.prepareForSearchSubmit();
        this.srchForm.standardSubmit = true;
        this.srchForm.submitUrl = Runner.pages.getUrl("forumtopics","list");
        this.srchForm.baseParams = {};
        this.srchForm.submit();
    }

	}

	
    var originalInit = Runner.pages.RunnerPage.prototype.init;
    Runner.pages.RunnerPage.prototype.init = function() {
		var loginTName = Runner.pages.PageSettings.getGlobalData( "loginTName" ).replace(/(.*)\./,"");
		  var forumTList = ["forumcategories",
			"forumcategorysubscribers",
			"forumreplies",
			"forumsettings",
			"forumsubscribers",
			"forumtopics",
			"forumusers",
			"forumusers_data",
			"forumsubscribers_dash",
			"forumtopics_view",
			"forumreplies_chart",
			"Dashboard",
			"profile"
			];
		  if( forumTList.includes(this.tName) || (loginTName === "forumusers" && this.pageType === "login") )
				init_forum();
        originalInit.call(this);
    }
});
