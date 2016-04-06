/*

 @Name: layui WebIM 1.0.0
 @Author锛氳搐蹇�
 @Date: 2014-04-25
 @Blog: http://sentsin.com

 */

;!function(win, undefined){

var config = {
    msgurl: 'mailbox.html?msg=',
    chatlogurl: 'mailbox.html?user=',
    aniTime: 200,
    right: -232,
    api: {
        friend: 'js/plugins/layer/layim/data/friend.json', //濂藉弸鍒楄〃鎺ュ彛
        group: 'js/plugins/layer/layim/data/group.json', //缇ょ粍鍒楄〃鎺ュ彛
        chatlog: 'js/plugins/layer/layim/data/chatlog.json', //鑱婂ぉ璁板綍鎺ュ彛
        groups: 'js/plugins/layer/layim/data/groups.json', //缇ょ粍鎴愬憳鎺ュ彛
        sendurl: '' //鍙戦€佹秷鎭帴鍙�
    },
    user: { //褰撳墠鐢ㄦ埛淇℃伅
        name: '娓稿',
        face: 'img/a1.jpg'
    },

    //鑷姩鍥炲鍐呯疆鏂囨锛屼篃鍙姩鎬佽鍙栨暟鎹簱閰嶇疆
    autoReplay: [
        '鎮ㄥソ锛屾垜鐜板湪鏈変簨涓嶅湪锛屼竴浼氬啀鍜屾偍鑱旂郴銆�',
        '浣犳病鍙戦敊鍚э紵',
        '娲楁尽涓紝璇峰嬁鎵撴壈锛屽伔绐ヨ璐エ锛屼釜浣撳洓鍗侊紝鍥綋鍏姌锛岃绁ㄧ數璇濓細涓€鑸汉鎴戜笉鍛婅瘔浠栵紒',
        '浣犲ソ锛屾垜鏄富浜虹殑缇庡コ绉樹功锛屾湁浠€涔堜簨灏辫窡鎴戣鍚э紝绛変粬鍥炴潵鎴戜細杞憡浠栫殑銆�',
        '鎴戞鍦ㄦ媺纾紝娌℃硶鎷涘懠鎮紝鍥犱负鎴戜滑瀹舵瘺椹村幓鍔ㄧ墿淇濇姢鍗忎細鎶婃垜鍛婁簡锛岃鎴戝墺澶哄畠浼戜骇鍋囩殑鏉冨埄銆�',
        '<锛園锟ｏ付锟锛�>',
        '浣犺鍜屾垜璇磋瘽锛熶綘鐪熺殑瑕佸拰鎴戣璇濓紵浣犵‘瀹氳嚜宸辨兂璇村悧锛熶綘涓€瀹氶潪璇翠笉鍙悧锛熼偅浣犺鍚э紝杩欐槸鑷姩鍥炲銆�',
        '涓讳汉姝ｅ湪寮€鏈鸿嚜妫€锛岄敭鐩橀紶鏍囩湅濂芥満浼氬嚭鍘诲噳蹇幓浜嗭紝鎴戞槸浠栫殑鐢靛啺绠憋紝鎴戞墦瀛楁瘮杈冩參锛屼綘鎱㈡參璇达紝鍒€モ€︹€�',
        '(*^__^*) 鍢诲樆锛屾槸璐ゅ績鍚楋紵'
    ],


    chating: {},
    hosts: (function(){
        var dk = location.href.match(/\:\d+/);
        dk = dk ? dk[0] : '';
        return 'http://' + document.domain + dk + '/';
    })(),
    json: function(url, data, callback, error){
        return $.ajax({
            type: 'POST',
            url: url,
            data: data,
            dataType: 'json',
            success: callback,
            error: error
        });
    },
    stopMP: function(e){
        e ? e.stopPropagation() : e.cancelBubble = true;
    }
}, dom = [$(window), $(document), $('html'), $('body')], xxim = {};

//涓荤晫闈ab
xxim.tabs = function(index){
    var node = xxim.node;
    node.tabs.eq(index).addClass('xxim_tabnow').siblings().removeClass('xxim_tabnow');
    node.list.eq(index).show().siblings('.xxim_list').hide();
    if(node.list.eq(index).find('li').length === 0){
        xxim.getDates(index);
    }
};

//鑺傜偣
xxim.renode = function(){
    var node = xxim.node = {
        tabs: $('#xxim_tabs>span'),
        list: $('.xxim_list'),
        online: $('.xxim_online'),
        setonline: $('.xxim_setonline'),
        onlinetex: $('#xxim_onlinetex'),
        xximon: $('#xxim_on'),
        layimFooter: $('#xxim_bottom'),
        xximHide: $('#xxim_hide'),
        xximSearch: $('#xxim_searchkey'),
        searchMian: $('#xxim_searchmain'),
        closeSearch: $('#xxim_closesearch'),
        layimMin: $('#layim_min')
    };
};

//涓荤晫闈㈢缉鏀�
xxim.expend = function(){
    var node = xxim.node;
    if(xxim.layimNode.attr('state') !== '1'){
        xxim.layimNode.stop().animate({right: config.right}, config.aniTime, function(){
            node.xximon.addClass('xxim_off');
            try{
                localStorage.layimState = 1;
            }catch(e){}
            xxim.layimNode.attr({state: 1});
            node.layimFooter.addClass('xxim_expend').stop().animate({marginLeft: config.right}, config.aniTime/2);
            node.xximHide.addClass('xxim_show');
        });
    } else {
        xxim.layimNode.stop().animate({right: 1}, config.aniTime, function(){
            node.xximon.removeClass('xxim_off');
            try{
                localStorage.layimState = 2;
            }catch(e){}
            xxim.layimNode.removeAttr('state');
            node.layimFooter.removeClass('xxim_expend');
            node.xximHide.removeClass('xxim_show');
        });
        node.layimFooter.stop().animate({marginLeft: 0}, config.aniTime);
    }
};

//鍒濆鍖栫獥鍙ｆ牸灞€
xxim.layinit = function(){
    var node = xxim.node;

    //涓荤晫闈�
    try{
        /*
        if(!localStorage.layimState){
            config.aniTime = 0;
            localStorage.layimState = 1;
        }
        */
        if(localStorage.layimState === '1'){
            xxim.layimNode.attr({state: 1}).css({right: config.right});
            node.xximon.addClass('xxim_off');
            node.layimFooter.addClass('xxim_expend').css({marginLeft: config.right});
            node.xximHide.addClass('xxim_show');
        }
    }catch(e){
        //layer.msg(e.message, 5, -1);
    }
};

//鑱婂ぉ绐楀彛
xxim.popchat = function(param){
    var node = xxim.node, log = {};

    log.success = function(layero){
        layer.setMove();

        xxim.chatbox = layero.find('#layim_chatbox');
        log.chatlist = xxim.chatbox.find('.layim_chatmore>ul');

        log.chatlist.html('<li data-id="'+ param.id +'" type="'+ param.type +'"  id="layim_user'+ param.type + param.id +'"><span>'+ param.name +'</span><em>脳</em></li>')
        xxim.tabchat(param, xxim.chatbox);

        //鏈€灏忓寲鑱婂ぉ绐�
        xxim.chatbox.find('.layer_setmin').on('click', function(){
            var indexs = layero.attr('times');
            layero.hide();
            node.layimMin.text(xxim.nowchat.name).show();
        });

        //鍏抽棴绐楀彛
        xxim.chatbox.find('.layim_close').on('click', function(){
            var indexs = layero.attr('times');
            layer.close(indexs);
            xxim.chatbox = null;
            config.chating = {};
            config.chatings = 0;
        });

        //鍏抽棴鏌愪釜鑱婂ぉ
        log.chatlist.on('mouseenter', 'li', function(){
            $(this).find('em').show();
        }).on('mouseleave', 'li', function(){
            $(this).find('em').hide();
        });
        log.chatlist.on('click', 'li em', function(e){
            var parents = $(this).parent(), dataType = parents.attr('type');
            var dataId = parents.attr('data-id'), index = parents.index();
            var chatlist = log.chatlist.find('li'), indexs;

            config.stopMP(e);

            delete config.chating[dataType + dataId];
            config.chatings--;

            parents.remove();
            $('#layim_area'+ dataType + dataId).remove();
            if(dataType === 'group'){
                $('#layim_group'+ dataType + dataId).remove();
            }

            if(parents.hasClass('layim_chatnow')){
                if(index === config.chatings){
                    indexs = index - 1;
                } else {
                    indexs = index + 1;
                }
                xxim.tabchat(config.chating[chatlist.eq(indexs).attr('type') + chatlist.eq(indexs).attr('data-id')]);
            }

            if(log.chatlist.find('li').length === 1){
                log.chatlist.parent().hide();
            }
        });

        //鑱婂ぉ閫夐」鍗�
        log.chatlist.on('click', 'li', function(){
            var othis = $(this), dataType = othis.attr('type'), dataId = othis.attr('data-id');
            xxim.tabchat(config.chating[dataType + dataId]);
        });

        //鍙戦€佺儹閿垏鎹�
        log.sendType = $('#layim_sendtype'), log.sendTypes = log.sendType.find('span');
        $('#layim_enter').on('click', function(e){
            config.stopMP(e);
            log.sendType.show();
        });
        log.sendTypes.on('click', function(){
            log.sendTypes.find('i').text('')
            $(this).find('i').text('鈭�');
        });

        xxim.transmit();
    };

    log.html = '<div class="layim_chatbox" id="layim_chatbox">'
            +'<h6>'
            +'<span class="layim_move"></span>'
            +'    <a href="'+ param.url +'" class="layim_face" target="_blank"><img src="'+ param.face +'" ></a>'
            +'    <a href="'+ param.url +'" class="layim_names" target="_blank">'+ param.name +'</a>'
            +'    <span class="layim_rightbtn">'
            +'        <i class="layer_setmin">鈥�</i>'
            +'        <i class="layim_close">&times;</i>'
            +'    </span>'
            +'</h6>'
            +'<div class="layim_chatmore" id="layim_chatmore">'
            +'    <ul class="layim_chatlist"></ul>'
            +'</div>'
            +'<div class="layim_groups" id="layim_groups"></div>'
            +'<div class="layim_chat">'
            +'    <div class="layim_chatarea" id="layim_chatarea">'
            +'        <ul class="layim_chatview layim_chatthis"  id="layim_area'+ param.type + param.id +'"></ul>'
            +'    </div>'
            +'    <div class="layim_tool">'
            +'        <i class="layim_addface fa fa-meh-o" title="鍙戦€佽〃鎯�"></i>'
            +'        <a href="javascript:;"><i class="layim_addimage fa fa-picture-o" title="涓婁紶鍥剧墖"></i></a>'
            +'        <a href="javascript:;"><i class="layim_addfile fa fa-paperclip" title="涓婁紶闄勪欢"></i></a>'
            +'        <a href="" target="_blank" class="layim_seechatlog"><i class="fa fa-comment-o"></i>鑱婂ぉ璁板綍</a>'
            +'    </div>'
            +'    <textarea class="layim_write" id="layim_write"></textarea>'
            +'    <div class="layim_send">'
            +'        <div class="layim_sendbtn" id="layim_sendbtn">鍙戦€�<span class="layim_enter" id="layim_enter"><em class="layim_zero"></em></span></div>'
            +'        <div class="layim_sendtype" id="layim_sendtype">'
            +'            <span><i>鈭�</i>鎸塃nter閿彂閫�</span>'
            +'            <span><i></i>鎸塁trl+Enter閿彂閫�</span>'
            +'        </div>'
            +'    </div>'
            +'</div>'
            +'</div>';

    if(config.chatings < 1){
        $.layer({
            type: 1,
            border: [0],
            title: false,
            shade: [0],
            area: ['620px', '493px'],
            move: '.layim_chatbox .layim_move',
            moveType: 1,
            closeBtn: false,
            offset: [(($(window).height() - 493)/2)+'px', ''],
            page: {
                html: log.html
            }, success: function(layero){
                log.success(layero);
            }
        })
    } else {
        log.chatmore = xxim.chatbox.find('#layim_chatmore');
        log.chatarea = xxim.chatbox.find('#layim_chatarea');

        log.chatmore.show();

        log.chatmore.find('ul>li').removeClass('layim_chatnow');
        log.chatmore.find('ul').append('<li data-id="'+ param.id +'" type="'+ param.type +'" id="layim_user'+ param.type + param.id +'" class="layim_chatnow"><span>'+ param.name +'</span><em>脳</em></li>');

        log.chatarea.find('.layim_chatview').removeClass('layim_chatthis');
        log.chatarea.append('<ul class="layim_chatview layim_chatthis" id="layim_area'+ param.type + param.id +'"></ul>');

        xxim.tabchat(param);
    }

    //缇ょ粍
    log.chatgroup = xxim.chatbox.find('#layim_groups');
    if(param.type === 'group'){
        log.chatgroup.find('ul').removeClass('layim_groupthis');
        log.chatgroup.append('<ul class="layim_groupthis" id="layim_group'+ param.type + param.id +'"></ul>');
        xxim.getGroups(param);
    }
    //鐐瑰嚮缇ゅ憳鍒囨崲鑱婂ぉ绐�
    log.chatgroup.on('click', 'ul>li', function(){
        xxim.popchatbox($(this));
    });
};

//瀹氫綅鍒版煇涓亰澶╅槦鍒�
xxim.tabchat = function(param){
    var node = xxim.node, log = {}, keys = param.type + param.id;
    xxim.nowchat = param;

    xxim.chatbox.find('#layim_user'+ keys).addClass('layim_chatnow').siblings().removeClass('layim_chatnow');
    xxim.chatbox.find('#layim_area'+ keys).addClass('layim_chatthis').siblings().removeClass('layim_chatthis');
    xxim.chatbox.find('#layim_group'+ keys).addClass('layim_groupthis').siblings().removeClass('layim_groupthis');

    xxim.chatbox.find('.layim_face>img').attr('src', param.face);
    xxim.chatbox.find('.layim_face, .layim_names').attr('href', param.href);
    xxim.chatbox.find('.layim_names').text(param.name);

    xxim.chatbox.find('.layim_seechatlog').attr('href', config.chatlogurl + param.id);

    log.groups = xxim.chatbox.find('.layim_groups');
    if(param.type === 'group'){
        log.groups.show();
    } else {
        log.groups.hide();
    }

    $('#layim_write').focus();

};

//寮瑰嚭鑱婂ぉ绐�
xxim.popchatbox = function(othis){
    var node = xxim.node, dataId = othis.attr('data-id'), param = {
        id: dataId, //鐢ㄦ埛ID
        type: othis.attr('type'),
        name: othis.find('.xxim_onename').text(),  //鐢ㄦ埛鍚�
        face: othis.find('.xxim_oneface').attr('src'),  //鐢ㄦ埛澶村儚
        href: 'profile.html?user=' + dataId //鐢ㄦ埛涓婚〉
    }, key = param.type + dataId;
    if(!config.chating[key]){
        xxim.popchat(param);
        config.chatings++;
    } else {
        xxim.tabchat(param);
    }
    config.chating[key] = param;

    var chatbox = $('#layim_chatbox');
    if(chatbox[0]){
        node.layimMin.hide();
        chatbox.parents('.xubox_layer').show();
    }
};

//璇锋眰缇ゅ憳
xxim.getGroups = function(param){
    var keys = param.type + param.id, str = '',
    groupss = xxim.chatbox.find('#layim_group'+ keys);
    groupss.addClass('loading');
    config.json(config.api.groups, {}, function(datas){
        if(datas.status === 1){
            var ii = 0, lens = datas.data.length;
            if(lens > 0){
                for(; ii < lens; ii++){
                    str += '<li data-id="'+ datas.data[ii].id +'" type="one"><img src="'+ datas.data[ii].face +'" class="xxim_oneface"><span class="xxim_onename">'+ datas.data[ii].name +'</span></li>';
                }
            } else {
                str = '<li class="layim_errors">娌℃湁缇ゅ憳</li>';
            }

        } else {
            str = '<li class="layim_errors">'+ datas.msg +'</li>';
        }
        groupss.removeClass('loading');
        groupss.html(str);
    }, function(){
        groupss.removeClass('loading');
        groupss.html('<li class="layim_errors">璇锋眰寮傚父</li>');
    });
};

//娑堟伅浼犺緭
xxim.transmit = function(){
    var node = xxim.node, log = {};
    node.sendbtn = $('#layim_sendbtn');
    node.imwrite = $('#layim_write');

    //鍙戦€�
    log.send = function(){
        var data = {
            content: node.imwrite.val(),
            id: xxim.nowchat.id,
            sign_key: '', //瀵嗗寵
            _: +new Date
        };

        if(data.content.replace(/\s/g, '') === ''){
            layer.tips('璇寸偣鍟ュ憲锛�', '#layim_write', 2);
            node.imwrite.focus();
        } else {
            //姝ゅ鐨嗕负妯℃嫙
            var keys = xxim.nowchat.type + xxim.nowchat.id;

            //鑱婂ぉ妯＄増
            log.html = function(param, type){
                return '<li class="'+ (type === 'me' ? 'layim_chateme' : '') +'">'
                    +'<div class="layim_chatuser">'
                        + function(){
                            if(type === 'me'){
                                return '<span class="layim_chattime">'+ param.time +'</span>'
                                       +'<span class="layim_chatname">'+ param.name +'</span>'
                                       +'<img src="'+ param.face +'" >';
                            } else {
                                return '<img src="'+ param.face +'" >'
                                       +'<span class="layim_chatname">'+ param.name +'</span>'
                                       +'<span class="layim_chattime">'+ param.time +'</span>';
                            }
                        }()
                    +'</div>'
                    +'<div class="layim_chatsay">'+ param.content +'<em class="layim_zero"></em></div>'
                +'</li>';
            };

            log.imarea = xxim.chatbox.find('#layim_area'+ keys);

            log.imarea.append(log.html({
                time: '2014-04-26 0:37',
                name: config.user.name,
                face: config.user.face,
                content: data.content
            }, 'me'));
            node.imwrite.val('').focus();
            log.imarea.scrollTop(log.imarea[0].scrollHeight);

            setTimeout(function(){
                log.imarea.append(log.html({
                    time: '2014-04-26 0:38',
                    name: xxim.nowchat.name,
                    face: xxim.nowchat.face,
                    content: config.autoReplay[(Math.random()*config.autoReplay.length) | 0]
                }));
                log.imarea.scrollTop(log.imarea[0].scrollHeight);
            }, 500);

            /*
            that.json(config.api.sendurl, data, function(datas){

            });
            */
        }

    };
    node.sendbtn.on('click', log.send);

    node.imwrite.keyup(function(e){
        if(e.keyCode === 13){
            log.send();
        }
    });
};

//浜嬩欢
xxim.event = function(){
    var node = xxim.node;

    //涓荤晫闈ab
    node.tabs.eq(0).addClass('xxim_tabnow');
    node.tabs.on('click', function(){
        var othis = $(this), index = othis.index();
        xxim.tabs(index);
    });

    //鍒楄〃灞曟敹
    node.list.on('click', 'h5', function(){
        var othis = $(this), chat = othis.siblings('.xxim_chatlist'), parentss = othis.find("i");
        if(parentss.hasClass('fa-caret-down')){
            chat.hide();
            parentss.attr('class','fa fa-caret-right');
        } else {
            chat.show();
            parentss.attr('class','fa fa-caret-down');
        }
    });

    //璁剧疆鍦ㄧ嚎闅愯韩
    node.online.on('click', function(e){
        config.stopMP(e);
        node.setonline.show();
    });
    node.setonline.find('span').on('click', function(e){
        var index = $(this).index();
        config.stopMP(e);
        if(index === 0){
            node.onlinetex.html('鍦ㄧ嚎');
            node.online.removeClass('xxim_offline');
        } else if(index === 1) {
            node.onlinetex.html('闅愯韩');
            node.online.addClass('xxim_offline');
        }
        node.setonline.hide();
    });

    node.xximon.on('click', xxim.expend);
    node.xximHide.on('click', xxim.expend);

    //鎼滅储
    node.xximSearch.keyup(function(){
        var val = $(this).val().replace(/\s/g, '');
        if(val !== ''){
            node.searchMian.show();
            node.closeSearch.show();
            //姝ゅ鐨勬悳绱jax鍙傝€儀xim.getDates
            node.list.eq(3).html('<li class="xxim_errormsg">娌℃湁绗﹀悎鏉′欢鐨勭粨鏋�</li>');
        } else {
            node.searchMian.hide();
            node.closeSearch.hide();
        }
    });
    node.closeSearch.on('click', function(){
        $(this).hide();
        node.searchMian.hide();
        node.xximSearch.val('').focus();
    });

    //寮瑰嚭鑱婂ぉ绐�
    config.chatings = 0;
    node.list.on('click', '.xxim_childnode', function(){
        var othis = $(this);
        xxim.popchatbox(othis);
    });

    //鐐瑰嚮鏈€灏忓寲鏍�
    node.layimMin.on('click', function(){
        $(this).hide();
        $('#layim_chatbox').parents('.xubox_layer').show();
    });


    //document浜嬩欢
    dom[1].on('click', function(){
        node.setonline.hide();
        $('#layim_sendtype').hide();
    });
};

//璇锋眰鍒楄〃鏁版嵁
xxim.getDates = function(index){
    var api = [config.api.friend, config.api.group, config.api.chatlog],
        node = xxim.node, myf = node.list.eq(index);
    myf.addClass('loading');
    config.json(api[index], {}, function(datas){
        if(datas.status === 1){
            var i = 0, myflen = datas.data.length, str = '', item;
            if(myflen > 1){
                if(index !== 2){
                    for(; i < myflen; i++){
                        str += '<li data-id="'+ datas.data[i].id +'" class="xxim_parentnode">'
                            +'<h5><i class="fa fa-caret-right"></i><span class="xxim_parentname">'+ datas.data[i].name +'</span><em class="xxim_nums">锛�'+ datas.data[i].nums +'锛�</em></h5>'
                            +'<ul class="xxim_chatlist">';
                        item = datas.data[i].item;
                        for(var j = 0; j < item.length; j++){
                            str += '<li data-id="'+ item[j].id +'" class="xxim_childnode" type="'+ (index === 0 ? 'one' : 'group') +'"><img src="'+ item[j].face +'" class="xxim_oneface"><span class="xxim_onename">'+ item[j].name +'</span></li>';
                        }
                        str += '</ul></li>';
                    }
                } else {
                    str += '<li class="xxim_liston">'
                        +'<ul class="xxim_chatlist">';
                    for(; i < myflen; i++){
                        str += '<li data-id="'+ datas.data[i].id +'" class="xxim_childnode" type="one"><img src="'+ datas.data[i].face +'"  class="xxim_oneface"><span  class="xxim_onename">'+ datas.data[i].name +'</span><em class="xxim_time">'+ datas.data[i].time +'</em></li>';
                    }
                    str += '</ul></li>';
                }
                myf.html(str);
            } else {
                myf.html('<li class="xxim_errormsg">娌℃湁浠讳綍鏁版嵁</li>');
            }
            myf.removeClass('loading');
        } else {
            myf.html('<li class="xxim_errormsg">'+ datas.msg +'</li>');
        }
    }, function(){
        myf.html('<li class="xxim_errormsg">璇锋眰澶辫触</li>');
        myf.removeClass('loading');
    });
};

//娓叉煋楠ㄦ灦
xxim.view = (function(){
    var xximNode = xxim.layimNode = $('<div id="xximmm" class="xxim_main">'
            +'<div class="xxim_top" id="xxim_top">'
            +'  <div class="xxim_search"><i class="fa fa-search"></i><input id="xxim_searchkey" /><span id="xxim_closesearch">脳</span></div>'
            +'  <div class="xxim_tabs" id="xxim_tabs"><span class="xxim_tabfriend" title="濂藉弸"><i class="fa fa-user"></i></span><span class="xxim_tabgroup" title="缇ょ粍"><i class="fa fa-users"></i></span><span class="xxim_latechat"  title="鏈€杩戣亰澶�"><i class="fa fa-clock-o"></i></span></div>'
            +'  <ul class="xxim_list" style="display:block"></ul>'
            +'  <ul class="xxim_list"></ul>'
            +'  <ul class="xxim_list"></ul>'
            +'  <ul class="xxim_list xxim_searchmain" id="xxim_searchmain"></ul>'
            +'</div>'
            +'<ul class="xxim_bottom" id="xxim_bottom">'
            +'<li class="xxim_online" id="xxim_online">'
                +'<i class="xxim_nowstate fa fa-check-circle"></i><span id="xxim_onlinetex">鍦ㄧ嚎</span>'
                +'<div class="xxim_setonline">'
                    +'<span><i class="fa fa-check-circle"></i>鍦ㄧ嚎</span>'
                    +'<span class="xxim_setoffline"><i class="fa fa-check-circle"></i>闅愯韩</span>'
                +'</div>'
            +'</li>'
            +'<li class="xxim_mymsg" id="xxim_mymsg" title="鎴戠殑绉佷俊"><i class="fa fa-comment"></i><a href="'+ config.msgurl +'" target="_blank"></a></li>'
            +'<li class="xxim_seter" id="xxim_seter" title="璁剧疆">'
                +'<i class="fa fa-gear"></i>'
                +'<div>'

                +'</div>'
            +'</li>'
            +'<li class="xxim_hide" id="xxim_hide"><i class="fa fa-exchange"></i></li>'
            +'<li id="xxim_on" class="xxim_icon xxim_on fa fa-ellipsis-v"></li>'
            +'<div class="layim_min" id="layim_min"></div>'
        +'</ul>'
    +'</div>');
    dom[3].append(xximNode);

    xxim.renode();
    xxim.getDates(0);
    xxim.event();
    xxim.layinit();
}());

}(window);
// JavaScript Document