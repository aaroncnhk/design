swfobject.addDomLoadEvent(function () {
    //------------------------------------------------------------------------------绀轰緥涓€
    var webcamAvailable = false;
    var currentTab = 'upload';
	var sourcePic1Url = $.Cookie('swf1');
	var sourcePic2Url = $.Cookie('swf2');
	if(sourcePic2Url == null)
	{
		sourcePic2Url = "http://www.baidu.com/img/bdlogo.png";
	}
    var callback = function (json) {
		var id = this.id;
        switch (json.code) {
            case 2:
                //濡傛灉鍔犺浇鍘熷浘鎴愬姛锛岃鏄庤繘鍏ヤ簡缂栬緫闈㈡澘锛屾樉绀轰繚瀛樺拰鍙栨秷鎸夐挳锛岄殣钘忔媿鐓ф寜閽�
                if (json.type == 0) {
					if(id == "swf1")
					{
						$('#webcamPanelButton').hide();
						$('#editorPanelButtons').show();
					}
                }
                //鍚﹀垯浼氳浆鍒颁笂浼犻潰鏉�
                else {
                    //闅愯棌鎵€鏈夋寜閽�
                    if(id == "swf1")$('#editorPanelButtons,#webcamPanelButton').hide();
                }
                break;
            case 3:
                //濡傛灉鎽勫儚澶村凡鍑嗗灏辩华涓旂敤鎴峰凡鍏佽浣跨敤锛屾樉绀烘媿鐓ф寜閽€�
                if (json.type == 0) {
                    if(id == "swf1")
					{
						$('.button_shutter').removeClass('Disabled');
						$('#webcamPanelButton').show();
						webcamAvailable = true;
					}
                }
                else {
					if(id == "swf1")
					{
						webcamAvailable = false;
						$('#webcamPanelButton').hide();
					}
                    //濡傛灉鎽勫儚澶村凡鍑嗗灏辩华浣嗙敤鎴峰凡鎷掔粷浣跨敤銆�
                    if (json.type == 1) {
                        alert('鐢ㄦ埛鎷掔粷浣跨敤鎽勫儚澶�!');
                    }
                    //濡傛灉鎽勫儚澶村凡鍑嗗灏辩华浣嗘憚鍍忓ご琚崰鐢ㄣ€�
                    else {
                        alert('鎽勫儚澶磋鍗犵敤!');
                    }
                }
                break;
            case 4:
                alert("鎮ㄩ€夋嫨鐨勫師鍥剧墖鏂囦欢澶у皬锛�" + json.content + "锛夎秴鍑轰簡鎸囧畾鐨勫€�(2MB)銆�");
                break;
            case 5:
                //濡傛灉涓婁紶鎴愬姛
                if (json.type == 0) {
					var e = this;
					var html = $('<div class="imgList"/>');
					for(var i = 0; i < json.content.avatarUrls.length; i++)
					{
						html.append('<dl><dt>澶村儚鍥剧墖'+(i+1)+'</dt><dd><img src="' + json.content.avatarUrls[i] + '" /></dd></dl>');
					}
					var button = [];
					//濡傛灉涓婁紶浜嗗師鍥撅紝缁欎釜淇敼鎸夐挳锛屾劅鍙楄鍥惧垵濮嬪寲甯︽潵鐨勭敤鎴蜂綋楠屽害鎻愬崌
					if(json.content.sourceUrl)
					{
						button.push({text : '淇敼澶村儚', callback:function(){
							this.close();
							$.Cookie(id, json.content.sourceUrl);
							location.reload();
							//e.call('loadPic', json.content.sourceUrl);
						}});
					}
					else
					{
						$.Cookie(id, null);
					}
					button.push({text : '鍏抽棴绐楀彛'});
					$.dialog({
						title:'鍥剧墖宸叉垚鍔熶繚瀛樿嚦鏈嶅姟鍣�',
						content:html,
						button:button,
						mask:true,
						draggable:false
					});
                }
                else {
                    alert(json.type);
                }
                break;
        }
    };
    var swf1 = new fullAvatarEditor('swf1', 335, {
		id : 'swf1',
        upload_url : 'upload.php',
		src_url : sourcePic1Url,			//榛樿鍔犺浇鐨勫師鍥剧墖鐨剈rl
        tab_visible : false,				//涓嶆樉绀洪€夐」鍗★紝澶栭儴鑷畾涔�
        button_visible : false,				//涓嶆樉绀烘寜閽紝澶栭儴鑷畾涔�
        src_upload : 2,						//鏄惁涓婁紶鍘熷浘鐗囩殑閫夐」锛�2-鏄剧ず澶嶉€夋鐢辩敤鎴烽€夋嫨锛�0-涓嶄笂浼狅紝1-涓婁紶
        checkbox_visible : false,			//涓嶆樉绀哄閫夋锛屽閮ㄨ嚜瀹氫箟
        browse_box_align : 38,				//鍥剧墖閫夋嫨妗嗙殑姘村钩瀵归綈鏂瑰紡銆俵eft锛氬乏瀵归綈锛沜enter锛氬眳涓榻愶紱right锛氬彸瀵归綈锛涙暟鍊硷細鐩稿浜庤垶鍙扮殑x鍧愭爣
		webcam_box_align : 38,				//鎽勫儚澶存媿鐓ф鐨勬按骞冲榻愭柟寮忥紝濡備笂銆�
		avatar_sizes : '258*200',			//瀹氫箟鍗曚釜澶村儚
		avatar_sizes_desc :'258*200鍍忕礌',	   //澶村儚灏哄鐨勬彁绀烘枃鏈€�
        browse_box_align:'left',            //澶村儚閫夋嫨妗嗗榻愭柟寮�
        webcam_box_align:'left',            //澶村儚鎷嶇収妗嗗榻愭柟寮�
		//澶村儚绠€浠�
		avatar_intro : '     鏈€缁堜細鐢熸垚涓嬮潰杩欎釜灏哄鐨勫ご鍍�',
		avatar_tools_visible:true			//鏄惁鏄剧ず棰滆壊璋冩暣宸ュ叿
    }, callback);
    //閫夐」鍗＄偣鍑讳簨浠�
    $('#avatar-tab li').click(function () {
        if (currentTab != this.id) {
            currentTab = this.id;
            $(this).addClass('active');
            $(this).siblings().removeClass('active');
            //濡傛灉鏄偣鍑烩€滅浉鍐岄€夊彇鈥�
            if (this.id === 'albums') {
                //闅愯棌flash
                hideSWF();
                showAlbums();
            }
            else {
                hideAlbums();
                showSWF();
                if (this.id === 'webcam') {
                    $('#editorPanelButtons').hide();
                    if (webcamAvailable) {
                        $('.button_shutter').removeClass('Disabled');
                        $('#webcamPanelButton').show();
                    }
                }
                else {
                    //闅愯棌鎵€鏈夋寜閽�
                    $('#editorPanelButtons,#webcamPanelButton').hide();
                }
            }
            swf1.call('changepanel', this.id);
        }
    });
    //澶嶉€夋浜嬩欢
    $('#src_upload').change(function () {
        swf1.call('srcUpload', this.checked);
    });
    //鐐瑰嚮涓婁紶鎸夐挳鐨勪簨浠�
    $('.button_upload').click(function () {
        swf1.call('upload');
    });
    //鐐瑰嚮鍙栨秷鎸夐挳鐨勪簨浠�
    $('.button_cancel').click(function () {
        var activedTab = $('#avatar-tab li.active')[0].id;
        if (activedTab === 'albums') {
            hideSWF();
            showAlbums();
        }
        else {
            swf1.call('changepanel', activedTab);
            if (activedTab === 'webcam') {
                $('#editorPanelButtons').hide();
                if (webcamAvailable) {
                    $('.button_shutter').removeClass('Disabled');
                    $('#webcamPanelButton').show();
                }
            }
            else {
                //闅愯棌鎵€鏈夋寜閽�
                $('#editorPanelButtons,#webcamPanelButton').hide();
            }
        }
    });
    //鐐瑰嚮鎷嶇収鎸夐挳鐨勪簨浠�
    $('.button_shutter').click(function () {
        if (!$(this).hasClass('Disabled')) {
            $(this).addClass('Disabled');
            swf1.call('pressShutter');
        }
    });
    //浠庣浉鍐屼腑閫夊彇
    $('#userAlbums a').click(function () {
        var sourcePic = this.href;
        swf1.call('loadPic', sourcePic);
        //闅愯棌鐩稿唽
        hideAlbums();
        //鏄剧ずflash
        showSWF();
        return false;
    });
    //闅愯棌flash鐨勫嚱鏁�
    function hideSWF() {
        //灏嗗楂樿缃负0鐨勬柟寮忔潵闅愯棌flash锛岃€屼笉鑳戒娇鐢ㄥ皢鍏禿isplay鏍峰紡璁剧疆涓簄one鐨勬柟寮忔潵闅愯棌锛屽惁鍒檉lash灏嗕笉浼氳鍔犺浇锛岄殣钘忔椂鍌ㄥ瓨鍏跺楂橈紝浠ヤ究鍚庢湡鎭㈠
        $('#flash1').data({
            w: $('#flash1').width(),
            h: $('#flash1').height()
        })
		.css({
		    width: '0px',
		    height: '0px',
		    overflow: 'hidden'
		});
        //闅愯棌鎵€鏈夋寜閽�
        $('#editorPanelButtons,#webcamPanelButton').hide();
    }
    function showSWF() {
        $('#flash1').css({
            width: $('#flash1').data('w'),
            height: $('#flash1').data('h')
        });
    }
    //鏄剧ず鐩稿唽鐨勫嚱鏁�
    function showAlbums() {
        $('#userAlbums').show();
    }
    //闅愯棌鐩稿唽鐨勫嚱鏁�
    function hideAlbums() {
        $('#userAlbums').hide();
    }
    //------------------------------------------------------------------------------绀轰緥浜�
    var swf2 = new fullAvatarEditor('swf2', {
        id: 'swf2',
        upload_url: 'upload.php',	//涓婁紶鍥剧墖鐨勬帴鍙ｅ湴鍧€
        src_url: sourcePic2Url,		//榛樿鍔犺浇鐨勫師鍥剧墖鐨剈rl
        src_upload: 2,				//鏄惁涓婁紶鍘熷浘鐗囩殑閫夐」锛�2-鏄剧ず澶嶉€夋鐢辩敤鎴烽€夋嫨锛�0-涓嶄笂浼狅紝1-涓婁紶
		avatar_scale:2,				//澶村儚淇濆瓨鏃剁殑缂╂斁绯绘暟
		avatar_intro:'鏈€缁堝ご鍍忕殑灏哄涓轰互涓嬪昂瀵� * 2(璁剧疆鐨勭缉鏀剧郴鏁�)',	//澶村儚灏哄鐨勬彁绀烘枃鏈€傚叾闂寸敤"|"鍙峰垎闅旓紝
		avatar_sizes_desc:'100*100鍍忕礌锛岀缉鏀剧郴鏁颁负2锛屼繚瀛樺悗鐨勫ぇ灏忎负200*200鍍忕礌銆倈50*50鍍忕礌锛岀缉鏀剧郴鏁颁负2锛屼繚瀛樺悗鐨勫ぇ灏忎负100*100鍍忕礌銆倈32*32鍍忕礌锛岀缉鏀剧郴鏁颁负2锛屼繚瀛樺悗鐨勫ぇ灏忎负64*64鍍忕礌銆�'
    }, callback);
});// JavaScript Document