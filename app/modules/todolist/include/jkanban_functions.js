var isAdmin;
function init_Kanbam(p_boardid){
	var KanbanTest;
	$("body").click(function(e){
		if(!isOpen)
			closeSubMenu();
		if(isEditList)
			closeEditListName(e, KanbanTest);
		if(isEditBoard)
			closeEditBoard(e);
		if(isAddList)
			closeAddListName(e);
		if(isAddCard)
			closeAddCard(e, KanbanTest);
		isOpen = false;
	});
	var isOpen = false;
	var isEditBoard = false;
	var isAddList = false;
	var isEditList = false;
	var isAddCard = false;
	var boardnumber = 1;
	var permCart, permList, permComment, commentAmount;
		;
	$.post("todoboards_list.php", {
		a: 'board',
		id: p_boardid,
		copyid: $("#copyid").val()
	})
	.done(function(txt){
		var res = JSON.parse(txt);
		if(res["boards"])
			var data = res["boards"];
		else
			var data = [];
		isAdmin = res["isAdmin"];
		boardnumber = res["bNum"];
		permCart = res["permCart"];
		permList = res["permList"];
		permComment = res["permComment"];
		commentAmount = res["commentAmount"];
		if(isAdmin == false){
			permCart["A"] = false;
			permCart["E"] = false;
			permCart["D"] = false;
			permList["A"] = false;
			permList["E"] = false;
			permList["D"] = false;
		}
		KanbanTest = new jKanban({
		element: '#myKanban',
		gutter: '10px',
		widthBoard: '250px',
		dragEl: function(el, source){
			return false;
		},
		dropEl: function(el, target, source, sibling){
			id = $(el)[0].dataset.eid.replace("item_","");
			saveBoard(KanbanTest,id,"afterMove");
		},
		dragendBoard: function(el){
			saveBoard(KanbanTest,0,"");
		},
		buttonClick: function (el, boardId) {
			isOpen = true;
			closeSubMenu();
			var elem = addListMenu(boardId);
			$(elem).insertAfter($("[data-id="+boardId+"]"));
			var val = $("[data-id="+boardId+"]")[0].offsetLeft+230;
			$("#menu_"+boardId).css("left",val+"px");
			$("#menu_"+boardId).css("top",30);
			$("#addCard").click(function(){
				closeSubMenu();
				var id = boardId.replace("board_","");
				$("#addfooter_"+id).click();
				isAddCard = true;
				return false;
			});
			$("#renList").click(function(){
				closeSubMenu();
				$("[data-id="+boardId+"]").find("div.kanban-title-board").click();
			});
			$("#delList").click(function(){
				closeSubMenu();
				if(confirm("Delete this section?")){
					KanbanTest.removeBoard(boardId);
					if(boardId){
						$.post("todoboards_list.php", {
							a: 'deleteboard',
							deleteid: boardId
						})
						if($("[data-id^=board_").length>0){
							var val = $("[data-id^=board_").last()[0].offsetLeft+250+20;
							$("#add_new_list").css("margin-left",val+"px");
						}
						else
							$("#add_new_list").css("margin-left","0px");
					}
				}
			});
			$("#copyList").click(function(){
				var mid = $(this).parent("div").attr("id").replace("menu_","");
				var elems = KanbanTest.getBoardElements(mid);
				var bName = prompt(Runner.getCustomLabel("list_name"), Runner.getCustomLabel("copy_list"));
				$.post("todoboards_list.php", {
					a: 'lastListID'
				})
				.done(function(bid){
					if(bName){
						KanbanTest.addBoards(
							[{
								"id": "board_"+bid,
								"title": bName
							}]
						)
						$.post("todoboards_list.php", {
							a: 'lastCardID'
						})
						.done(function(id){
							$.each(elems,function(i,el){
								var elid = $(el).attr("data-eid").replace("item_","");
								var bgcolor = $(el).find("span:eq(1)").css("background-color");
								var bgcolorid = $(el).find("span:eq(0)").attr("bgcolor");
								var value = $(el).find("span:eq(0)").attr("value");
								var assign = $(el).find("span:eq(0)").attr("assign");
								var elem = '<span assign="'+assign+'" class="title_row" bgcolor="'+bgcolorid+'" value="'+value+'">'+$(el).find("span:eq(0)").html()+'</span>';
								elem+= '<span class="bgcolor_row" style="background-color:'+bgcolor+'">&nbsp;&nbsp;&nbsp;</span>';
								elem+= '<span id="editrow_'+id+'" class="btn btn-default btn-xs edit_b glyphicon glyphicon-menu-hamburger" style="left:8px;top:-2px;display:none;"></span>';
								if(assign>0){
									elem+= '<div class="divAssignUser" id="assignUser_'+id+'">'+$("#assignUser_"+elid).html()+'</div>';
								}
								KanbanTest.addElement("board_"+bid,{
									title: elem,
									id: "item_"+id
								});
								setCardActions(id, KanbanTest);
								id++;
							});
							addOneNewCard(bid,KanbanTest)
							saveBoard(KanbanTest,0,"");
						});
					}
				});
				closeSubMenu();
			});
		},
		addItemButton: isAdmin,
		dragBoards: isAdmin,
		buttonContent   : '...',      
		boards: data
		});


		$("div[data-eid^=item_]").each(function(){
			id = $(this).attr("data-eid").replace("item_","");
			//var elem = "<span id='editrow_"+id+"' class='btn btn-default btn-xs edit_b glyphicon glyphicon-menu-hamburger' style='left:8px;top:-2px;display:none;'></span>";
			//$(elem).insertAfter($(this).find("span:eq(1)"));
			setCardActions(id, KanbanTest);
		});

		$(".row_assign").click(function(){
			closeSubMenu();
            var colorid=$(this).attr("val");
            $.post("todoboards_list.php", {
                a: 'assign',
                colorid: colorid
            })
            .done(function(arr){
				res = JSON.parse(arr);
				color = res[0];
				colorid = res[1];
				var id = $("#menuassign").attr("cardid");
				$("div[data-eid=item_"+id).find("span:eq(1)").css("background-color",color);
				$("div[data-eid=item_"+id).find("span:eq(0)").attr("bgcolor",colorid);
				saveBoard(KanbanTest,0,"");
            });
        });
		if(permList["E"])
			assignEditListName(KanbanTest);
		if(permCart["A"])
			addNewCardFooter(KanbanTest);
		if(permList["A"])
			addNewBoard(KanbanTest);
		if(isAdmin == "true"){
			$("#div_boardname").click(function(){
				$("[id^=value_boardname_]").css("display","inherit");
				$("[id^=value_boardname_]").focus();
				$("#div_boardname").css("display","none");
				isEditBoard = true;
			});
			$("[id^=value_boardname_]").keyup(function(e){
				if(e.which == 13){
					$("body").click();
				}
			});
		}
		
		/*$("[data-id^=board_]").each(function(){
			var id = $(this).attr("data-id").replace("board_","");
			var name = $(this).find("header")[0].childNodes[0].innerHTML;
			var elem = "<button id='edit_"+id+"' class='btn btn-default btn-xs edit_b glyphicon glyphicon-menu-hamburger'></button>";
			$(elem).insertAfter($(this).find("button"));	
			var obj = this;
			$("#edit_"+id).bind("click",function(){
				var bName = prompt("Rename section", name);
				if(bName && bName!=name)
					$("[data-id=board_"+id+"]").find("header")[0].childNodes[0].innerHTML=bName;
			});
		});*/
		
		/*$("#assign_close").unbind().bind("click", function(){
			$("#assign_div").css("left",-500);
			$("#assign_div").css("top",0);
			$("div[val=current]").attr("val","");
		});*/

	});
	function addNewBoard(KanbanTest){
		var el = '<div id="add_new_list" class="addnewboard"><span id="newboard" class="newboard">+ Add another list</span></div>';
		if($("[data-id^=board_").length>0){
			$(el).insertAfter($("[data-id^=board_").last());
			var val = $("[data-id^=board_").last()[0].offsetLeft+250+20;
		}
		else
			$(el).appendTo($(".kanban-container"));
		$("#add_new_list").css("margin-left",val+"px");
		$("#newboard").click(function(){
			var elem1 = "<input type='text' class='form-control editlistname' style='display:inline; width:160px;margin-top:-1px;' value='' placeholder='"+Runner.getCustomLabel("list_name")+"' id='editlistname'>";
			var elem2 = "<button id='addnewlist' class='btn btn-default btn-xs' style='margin-left:10px'>"+Runner.getCustomLabel("add_list")+"</button>";
			$("#newboard").hide();
			$(elem1+elem2).insertAfter($("#newboard"));
			$("#editlistname").focus();
			isAddList = true;
			$(".editlistname").keyup(function(e){
				if(e.which == 13){
					$("#addnewlist").click();
				}
				if(e.which == 27){
					$("body").click();
				}
			})
			$("#addnewlist").click(function(){
				jname = $("#editlistname").val();
				$.post("todoboards_list.php", {
					a: 'lastListID'
				})
				.done(function(bid){
					if(jname){
						KanbanTest.addBoards(
							[{
								"id": "board_"+bid,
								"title": jname
							}]
						)
						addOneNewCard(bid, KanbanTest);
						var val = $("[data-id^=board_").last()[0].offsetLeft+250+20;
						$("#add_new_list").css("margin-left",val+"px");
						saveBoard(KanbanTest,0,"");
					}
				});
			});
		});
	}

	function addNewCardFooter(KanbanTest){
		$("[data-id^=board_]").each(function(){
			var boardid = $(this).attr("data-id").replace("board_","");
			addOneNewCard(boardid, KanbanTest);
		});
	}
	function addOneNewCard(boardid,KanbanTest){
		var elem1 = "<input type=text id='addnewcard_"+boardid+"' class='form-control addnewcard' val='' placeholder='"+Runner.getCustomLabel("card_name")+"'>";
		var elem2 = "<button id='buttnewcard_"+boardid+"' class='btn btn-default btn-xs buttnewcard'>"+Runner.getCustomLabel("add_card")+"</button>";
		$("[data-id=board_"+boardid+"]").find("footer").html("<span listid='"+boardid+"' class='footerlist' id='addfooter_"+boardid+"'>+ "+Runner.getCustomLabel("add_acard")+"</span>"+elem1+elem2);
		$("[data-id=board_"+boardid+"]").find("footer").css("padding-bottom","10px");
		$("#addnewcard_"+boardid).keyup(function(e){
			if(e.which == 13){
				$("#buttnewcard_"+boardid).click();
			}
			if(e.which == 27){
				$("body").click();
			}
		})
		$("#addfooter_"+boardid).click(function(){
			$("#addfooter_"+boardid).hide();
			$("#addnewcard_"+boardid).show();
			$("#addnewcard_"+boardid).val("")
			$("#buttnewcard_"+boardid).show();
			$("#addnewcard_"+boardid).focus();
			isAddCard = true;
		});
		$("#buttnewcard_"+boardid).click(function(){
			//var newid = Math.floor(Math.random()*100000);
			$.post("todoboards_list.php", {
				a: 'lastCardID'
			})
			.done(function(newid){
				var newelem = '<span class="title_row" value="'+$("#addnewcard_"+boardid).val()+'">'+$("#addnewcard_"+boardid).val()+'</span>';
				newelem+= '<span class="bgcolor_row" style="background-color:">&nbsp;&nbsp;&nbsp;</span>';
				newelem+= '<span id="editrow_'+newid+'" class="btn btn-default btn-xs edit_b glyphicon glyphicon-menu-hamburger" style="left:8px;top:-2px;display:none;"></span>';
				KanbanTest.addElement("board_"+boardid,{
					title: newelem,
					id: "item_"+newid

				});
				setCardActions(newid, KanbanTest);
				saveBoard(KanbanTest,newid,"afterCardCreated");
			});
		});
	}
	function addListMenu(boardId){
		var elem = "<div class='kanban_menu_div' id='menu_"+boardId+"'>";
		elem+= "<div class='kanban_menu_x' onclick='$(\"#menu_"+boardId+"\").remove();'>x</div>";
		elem+= "<div class='kanban_menu_header'>"+Runner.getCustomLabel("list_action")+"</div>";
		if(permCart["A"]){
			elem+= "<div class='kanban_menu_row' id='addCard'>"+Runner.getCustomLabel("add_card")+"...</div>";
			elem+= "<div class='kanban_menu_row' id='copyList'>"+Runner.getCustomLabel("copy_list")+"...</div>";
		}
		if(permList["E"])
			elem+= "<div class='kanban_menu_row' id='renList'>"+Runner.getCustomLabel("rename_list")+"...</div>";
		if(permList["D"])
			elem+= "<div class='kanban_menu_row' id='delList'>"+Runner.getCustomLabel("delete_list")+"...</div>";
		elem+= "</div>";
		return elem;
	}
	function addCardMenu(cardid){
		var elem = "<div class='kanban_menu_div menu_card' id='menucard_"+cardid+"'>";
		elem+= "<div class='kanban_menu_x' onclick='$(\"#menucard_"+cardid+"\").remove();'>x</div>";
		elem+= "<div class='kanban_menu_header'>"+Runner.getCustomLabel("card_action")+"</div>";
		if(permCart["E"]){
			elem+= "<div class='kanban_menu_row' id='editCategory'>"+Runner.getCustomLabel("change_category")+"</div>";
			elem+= "<div class='kanban_menu_row' id='editCard'>"+Runner.getCustomLabel("edit_card")+"</div>";
		}
		elem+= "<div class='kanban_menu_row' id='viewCard'>"+Runner.getCustomLabel("view_card")+"</div>";
		if(permCart["E"])
			elem+= "<div class='kanban_menu_row' id='assignUser'>"+Runner.getCustomLabel("assign_user")+"</div>";
		if(permCart["A"])
			elem+= "<div class='kanban_menu_row' id='copyCard'>"+Runner.getCustomLabel("copy_card")+"...</div>";
		if(permCart["E"])
			elem+= "<div class='kanban_menu_row' id='moveCard'>"+Runner.getCustomLabel("move_card")+"...</div>";
		if(permCart["D"])
			elem+= "<div class='kanban_menu_row' id='delCard'>"+Runner.getCustomLabel("delete_card")+"</div>";
		if(permComment["A"] || commentAmount[cardid]>0)
			elem+= "<div class='kanban_menu_row' id='commCard'>"+Runner.getCustomLabel("add_comments")+"</div>";
		elem+= "</div>";
		return elem;
	}
	function closeSubMenu(){
		$(".kanban_menu_div_assign").hide();
		$(".kanban_menu_div").each(function(){
			$(this).remove();
		})
	}
	function closeEditBoard(e){
		if($(e.target).attr("id")!="div_boardname" && $(e.target).attr("id")!="value_boardname_1"){
			$("#value_boardname_1").css("display","none");
			$("#div_boardname").css("display","inherit");
			isEditBoard = false;
		}		
	}
	function closeAddListName(e){
		if($(e.target).attr("class")!="form-control editlistname" && $(e.target).attr("class")!="newboard"){
			$("#newboard").show();
			if($(e.target).attr("class")!="kanban-title-board")
				$("#editlistname").hide();
			$("#addnewlist").hide();
			isAddList = false;
		}
	}
	function closeAddCard(e, KanbanTest){
		$(".footerlist").each(function(){
			if($(e.target).attr("listid")!=$(this).attr("listid")){
				$("#addfooter_"+$(this).attr("listid")).show();
				$("#addnewcard_"+$(this).attr("listid")).hide();
				$("#buttnewcard_"+$(this).attr("listid")).hide();
			}
		});

		if($(e.target).attr("class") != "footerlist" && $(e.target).attr("class") != "form-control addnewcard"  && $(e.target).attr("class") != "btn btn-default btn-xs buttnewcard"){
			$("[id^=addfooter_]").show();
			$("[id^=addnewcard_]").hide();
			$("[id^=buttnewcard_]").hide();
			isAddCard = false;
		}
	}
	function closeEditListName(e, KanbanTest){
		if(!$(".editlistname").val()){
			$("div.kanban-title-board:hidden").show();
			$(".editlistname").remove();
			$("#addnewlist").remove();
			isEditList = false;	
			return;
		}
		if(e==null || $(e.target).attr("class")!="kanban-title-board" && $(e.target).attr("id")!="editlistname" && $(e.target).attr("id")!="renList"){
			if($("#addnewlist").length==0)
				$("div.kanban-title-board:hidden").html($(".editlistname").val());
			$("div.kanban-title-board:hidden").show();
//			assignEditListName(KanbanTest);
			saveBoard(KanbanTest,0,"");
			$(".editlistname:eq(0)").remove();
			$("#addnewlist:eq(0)").remove();
			isEditList = false;		
		}
	}
	function assignEditListName(KanbanTest){
		$("div.kanban-title-board").each(function(){
			$(this).unbind().bind("click",function(e){
				closeEditListName(null, KanbanTest);
				$("<input type='text' class='form-control editlistname' value='"+$(this).html()+"' id='editlistname'>").insertAfter($(this));
				$(this).hide();
				$(".editlistname").focus();
				$(".editlistname").keyup(function(e){
					if(e.which == 13)
						$("body").click();
					if(e.which == 27){
						$("div.kanban-title-board:hidden").show();
						$(".editlistname").remove();
						$("#addnewlist").remove();
						isEditList = false;	
					}
				})
				isEditList = true;
			});
		});
	}
	function outerHTML(node){
		return node.outerHTML || new XMLSerializer().serializeToString(node);
	}
	function setCardActions(id, KanbanTest){

		$("[data-eid=item_"+id+"]").bind("click", function(e){
			if($(e.target).attr("class") == "title_row" && isAdmin == "true"){
				viewCardPopup(id);
			}
		});
		$("#assignUser_"+id).bind("click", function(e){
			viewCardPopup(id);
		});

		var _this = $("[data-eid=item_"+id+"]");
		$(_this).mouseover(function(){
			$(_this).find("span:eq(1)").css("margin-left","0px");
			$(_this).find("span:eq(2)").show();
			
		});
		$(_this).mouseout(function(){
			$(_this).find("span:eq(1)").css("margin-left","30px");
			$(_this).find("span:eq(2)").hide();
		});
		$("#editrow_"+id).click(function(){
			closeSubMenu();
			var elem = addCardMenu(id);
			$(elem).insertBefore(_this);
			$("#assignUser").click(function(){
				closeSubMenu();
				var id = $(this).parent("div").attr("id").replace("menucard_","");
				var lid = $("#editrow_"+id).parent("div").parent("main").parent("div").attr("data-id").replace("board_","");
				$.post("todoboards_list.php",{
					a: "getusers"
				})
				.done(function(txt){
					var elem = "<div class='kanban_menu_div'>";
					elem+= "<div class='kanban_menu_x' onclick='$(\"#menucard_"+id+"\").remove();'>x</div>";
					elem+= "<div class='kanban_menu_header'>"+Runner.getCustomLabel("assign_user")+"</div>"
					elem+= "<div class='kanban_menu_popup'>"+txt;
					elem+= "</div>";
					$(elem).insertBefore($("#editrow_"+id));
					var top = $("#editrow_"+id).position().top+28;
					var left = $("#editrow_"+id).position().left+100;
					var userid = 0;
					$(".kanban_menu_div").css("left",left);
					$(".kanban_menu_div").css("top",top);
					$(".user_assign").each(function(){
						$(this).bind("click", function(){
							userid = $(this).attr("val");
							$.post("todoboards_list.php", {
								a: 'assignuser',
								cardid: id,
								userid: userid
							})
							.done(function(res){
								$("#assignUser_"+id).remove();
								if(res!="none"){
									$("<div class='divAssignUser' id='assignUser_"+id+"'>"+res+"</div>").insertAfter($("[data-eid=item_"+id+"]").find("span").last());
									$("#assignUser_"+id).bind("click", function(e){
										viewCardPopup(id);
									});
								}
								$("[data-eid=item_"+id+"]").find("span:eq(0)").attr("assign",userid);
								saveBoard(KanbanTest,0,"");
							});
						});
					});
				});
			});

			$("#delCard").click(function(){
				var q = confirm(Runner.getCustomLabel("realy_delete"));
				if(q){
					KanbanTest.removeElement("item_"+id);
					closeSubMenu();
					$.post("todoboards_list.php", {
						a: 'deletecard',
						deleteid: id
					})
				}
			});
			$("#editCard").click(function(){
				id = $(this).parent("div").attr("id").replace("menucard_","");
				window.popup = Runner.displayPopup( {
					url: "todocards_edit.php?editid1="+id,
					width: 700,
					height: 410,
					header: "<span style='font-size:18px'><b>"+Runner.getCustomLabel("edit_card")+"</b></span>",
					afterCreate: function(win) {
						$(".modal-footer").hide();
						$("#popupIframe1").contents().find(".panel-title").eq(1).hide();
					}
				 });
			});
			$("#viewCard").click(function(){
				id = $(this).parent("div").attr("id").replace("menucard_","");
				viewCardPopup(id);
			});
			$("#commCard").click(function(){
				id = $(this).parent("div").attr("id").replace("menucard_","");
				viewCardComments(id);
			});
			$("#copyCard").click(function(){
				closeSubMenu();
				var id = $(this).parent("div").attr("id").replace("menucard_","");
				var lid = $("#editrow_"+id).parent("div").parent("main").parent("div").attr("data-id").replace("board_","");
				$.post("todoboards_list.php",{
					a: "getlist",
					id: id,
					lid:lid
				})
				.done(function(txt){
					var elem = "<div class='kanban_menu_div'>";
					elem+= "<div class='kanban_menu_x' onclick='$(\"#menucard_"+id+"\").remove();'>x</div>";
					elem+= "<div class='kanban_menu_header'>"+Runner.getCustomLabel("copy_card")+"</div>"
					elem+= "<div class='kanban_menu_popup'>"+txt;
					elem+= "</div>";
					$(elem).insertBefore($("#editrow_"+id));
					var top = $("#editrow_"+id).position().top+28;
					var left = $("#editrow_"+id).position().left+100;
					$(".kanban_menu_div").css("left",left);
					$(".kanban_menu_div").css("top",top);
					//var newid = Math.floor(Math.random()*100000);
					$.post("todoboards_list.php", {
						a: 'lastCardID'
					})
					.done(function(newid){
						$(".list_assign").each(function(){
							$(this).bind("click", function(){
								closeSubMenu();
								KanbanTest.addElement("board_"+$(this).attr("val"), {
									id: "item_"+newid,
									title: KanbanTest.findElement("item_"+id).innerHTML.replace("editrow_"+id,"editrow_"+newid)
								});
								setCardActions(newid, KanbanTest);
								saveBoard(KanbanTest,0,"");
								$.post("todoboards_list.php",{
									a: "saveassign",
									id: id,
									newid:newid
								})
							});
						});
					});
				});
				
			});
			$("#moveCard").click(function(){
				closeSubMenu();
				var id = $(this).parent("div").attr("id").replace("menucard_","");
				var lid = $("#editrow_"+id).parent("div").parent("main").parent("div").attr("data-id").replace("board_","");
				$.post("todoboards_list.php",{
					a: "getlist",
					id: id,
					lid:lid
				})
				.done(function(txt){
					var elem = "<div class='kanban_menu_div'>";
					elem+= "<div class='kanban_menu_x' onclick='$(\"#menucard_"+id+"\").remove();'>x</div>";
					elem+= "<div class='kanban_menu_header'>"+Runner.getCustomLabel("move_card")+"</div>"
					elem+= "<div class='kanban_menu_popup'>"+txt;
					elem+= "</div>";
					$(elem).insertBefore($("#editrow_"+id));
					var top = $("#editrow_"+id).position().top+28;
					var left = $("#editrow_"+id).position().left+100;
					$(".kanban_menu_div").css("left",left);
					$(".kanban_menu_div").css("top",top);
					
					$(".list_assign").each(function(){
						$(this).bind("click", function(){
							closeSubMenu();
							newelem = KanbanTest.findElement("item_"+id).innerHTML;
							KanbanTest.removeElement("item_"+id);
							KanbanTest.addElement("board_"+$(this).attr("val"), {
								id: "item_"+id,
								title: newelem
							});
							setCardActions(id, KanbanTest);
							saveBoard(KanbanTest,0,"");
						});
					});
				});
				
			});
			$("#editCategory").click(function(ev){
				closeSubMenu();
				var top = _this.offset().top+26;
				var left = _this.offset().left+100;
				$(".kanban_menu_div_assign").css("left",left);
				$(".kanban_menu_div_assign").css("top",top);
				$(".kanban_menu_div_assign").show();
				$("#menuassign").attr("cardid",$(this).parent("div").attr("id").replace("menucard_",""));
				$("#assigncolor").click(function(){
					isOpen = true;
				});
				isOpen = true;
			});
			isOpen = true;
		});
	}
	function saveBoard(KanbanTest, cardid, event){
		if(permList["E"])
			assignEditListName(KanbanTest);

		var arr = [];
		$("div[data-id^=board_]").each(function(){
			arr[arr.length]=$(this).attr("data-id").replace("board_","");
		});
		arrmax = Math.max.apply(Math, arr);
		arrmin = Math.min.apply(Math, arr);
		var out = [], b = 0;
		for(var bNum=arrmin;bNum<=arrmax;bNum++){				
			if(KanbanTest.findBoard("board_"+bNum)){
				var res = {};
				var bid = $(KanbanTest.findBoard("board_"+bNum))[0].dataset.id;
				res["id"] = bid.replace("board_","");
				res["boardName"] = $("[data-id="+bid+"]").find("header")[0].childNodes[0].innerHTML;
				res["order"] = $(KanbanTest.findBoard("board_"+bNum))[0].dataset.order;
				var items = [], colors = [], ids = [], orders =[], assigns = [] ;
				for(var i=0;i<KanbanTest.getBoardElements("board_"+bNum).length;i++){
					if($(KanbanTest.getBoardElements("board_"+bNum))[i].dataset.eid.indexOf("add_new_item_")==-1){
						var elem = $(KanbanTest.getBoardElements("board_"+bNum)[i]);
						if(elem.find("span:first").length){
							if(elem.find("span:first").attr("value")!=undefined)
								items[i] = elem.find("span:first").attr("value");
							else
								items[i] = elem.find("span:first").html();
							colors[i] = elem.find("span:first").attr("bgcolor");
							ids[i] = elem.attr("data-eid").replace("item_","");
							assigns[i] = elem.find("span:first").attr("assign");
							orders[i] = i;
						}
						else{
							console.log("???");
							items[i] = KanbanTest.getBoardElements("board_"+bNum)[i].innerHTML;
							res["colors"] = colors;
							colors[i] = 0;
						}
					}
				}
				res["ids"] = ids;
				res["items"] = items;
				res["assigns"] = assigns;
				res["colors"] = colors;
				res["orders"] = orders;
				out[b] = res;
				b++;	
			}
		}
		$.post("todoboards_list.php", {
			a: 'saveboard',
			json: JSON.stringify(out),
			id: p_boardid,
			name: $("[id^=value_boardname_]").val(),
			cardid: cardid,
			event: event
		})
		.done(function(txt){
			res = JSON.parse(txt);
			if(p_boardid==0)
				location.href='todoboards_edit.php?editid1='+res[0];
			if(event){
				$("[data-eid=item_"+cardid).find("span:eq(0)").html(res[1]);
				$("[data-eid=item_"+cardid).find("span:eq(0)").attr("value",res[1]);
			}
		});
	}
	function viewCardPopup(id){
		var win = Runner.displayPopup( {
			url: "todocards_view.php?editid1="+id,
			width: 700,
			height: 400,
			header: "<span style='font-size:18px'><b>"+Runner.getCustomLabel("view_card")+"</b></span>",
			afterCreate: function(win) {
				$(".modal-footer").hide();
				if(isAdmin == false)
					$("#popupIframe1").contents().find("[data-itemid='custom_button']").remove();
				$("#popupIframe1").contents().find(".panel-title").eq(1).hide();
			}
		});
	}
	function viewCardComments(id){
		var win = Runner.displayPopup( {
			url: "todocomments_list.php?masterkey1="+id+"&mastertable=todocards",
			width: 850,
			height: 500,
			header: "<span style='font-size:18px'><b>"+Runner.getCustomLabel("comments")+"</b></span>",
			afterCreate: function(win) {
				$("#popupIframe1").contents().find("#form_supertop_1").hide();
			}
		});
	}
	
}
