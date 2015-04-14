
//Include bowser
var bowser_func = function(){function t(t){function n(e){var n=t.match(e);return n&&n.length>1&&n[1]||""}var r=n(/(ipod|iphone|ipad)/i).toLowerCase(),i=/like android/i.test(t),s=!i&&/android/i.test(t),o=n(/version\/(\d+(\.\d+)?)/i),u=/tablet/i.test(t),a=!u&&/[^-]mobi/i.test(t),f;/opera|opr/i.test(t)?f={name:"Opera",opera:e,version:o||n(/(?:opera|opr)[\s\/](\d+(\.\d+)?)/i)}:/windows phone/i.test(t)?f={name:"Windows Phone",windowsphone:e,msie:e,version:n(/iemobile\/(\d+(\.\d+)?)/i)}:/msie|trident/i.test(t)?f={name:"Internet Explorer",msie:e,version:n(/(?:msie |rv:)(\d+(\.\d+)?)/i)}:/chrome|crios|crmo/i.test(t)?f={name:"Chrome",chrome:e,version:n(/(?:chrome|crios|crmo)\/(\d+(\.\d+)?)/i)}:r?(f={name:r=="iphone"?"iPhone":r=="ipad"?"iPad":"iPod"},o&&(f.version=o)):/sailfish/i.test(t)?f={name:"Sailfish",sailfish:e,version:n(/sailfish\s?browser\/(\d+(\.\d+)?)/i)}:/seamonkey\//i.test(t)?f={name:"SeaMonkey",seamonkey:e,version:n(/seamonkey\/(\d+(\.\d+)?)/i)}:/firefox|iceweasel/i.test(t)?(f={name:"Firefox",firefox:e,version:n(/(?:firefox|iceweasel)[ \/](\d+(\.\d+)?)/i)},/\((mobile|tablet);[^\)]*rv:[\d\.]+\)/i.test(t)&&(f.firefoxos=e)):/silk/i.test(t)?f={name:"Amazon Silk",silk:e,version:n(/silk\/(\d+(\.\d+)?)/i)}:s?f={name:"Android",version:o}:/phantom/i.test(t)?f={name:"PhantomJS",phantom:e,version:n(/phantomjs\/(\d+(\.\d+)?)/i)}:/blackberry|\bbb\d+/i.test(t)||/rim\stablet/i.test(t)?f={name:"BlackBerry",blackberry:e,version:o||n(/blackberry[\d]+\/(\d+(\.\d+)?)/i)}:/(web|hpw)os/i.test(t)?(f={name:"WebOS",webos:e,version:o||n(/w(?:eb)?osbrowser\/(\d+(\.\d+)?)/i)},/touchpad\//i.test(t)&&(f.touchpad=e)):/bada/i.test(t)?f={name:"Bada",bada:e,version:n(/dolfin\/(\d+(\.\d+)?)/i)}:/tizen/i.test(t)?f={name:"Tizen",tizen:e,version:n(/(?:tizen\s?)?browser\/(\d+(\.\d+)?)/i)||o}:/safari/i.test(t)?f={name:"Safari",safari:e,version:o}:f={},/(apple)?webkit/i.test(t)?(f.name=f.name||"Webkit",f.webkit=e,!f.version&&o&&(f.version=o)):!f.opera&&/gecko\//i.test(t)&&(f.name=f.name||"Gecko",f.gecko=e,f.version=f.version||n(/gecko\/(\d+(\.\d+)?)/i)),s||f.silk?f.android=e:r&&(f[r]=e,f.ios=e);var l="";r?(l=n(/os (\d+([_\s]\d+)*) like mac os x/i),l=l.replace(/[_\s]/g,".")):s?l=n(/android[ \/-](\d+(\.\d+)*)/i):f.windowsphone?l=n(/windows phone (?:os)?\s?(\d+(\.\d+)*)/i):f.webos?l=n(/(?:web|hpw)os\/(\d+(\.\d+)*)/i):f.blackberry?l=n(/rim\stablet\sos\s(\d+(\.\d+)*)/i):f.bada?l=n(/bada\/(\d+(\.\d+)*)/i):f.tizen&&(l=n(/tizen[\/\s](\d+(\.\d+)*)/i)),l&&(f.osversion=l);var c=l.split(".")[0];if(u||r=="ipad"||s&&(c==3||c==4&&!a)||f.silk)f.tablet=e;else if(a||r=="iphone"||r=="ipod"||s||f.blackberry||f.webos||f.bada)f.mobile=e;return f.msie&&f.version>=10||f.chrome&&f.version>=20||f.firefox&&f.version>=20||f.safari&&f.version>=6||f.opera&&f.version>=10||f.ios&&f.osversion&&f.osversion.split(".")[0]>=6?f.a=e:f.msie&&f.version<10||f.chrome&&f.version<20||f.firefox&&f.version<20||f.safari&&f.version<6||f.opera&&f.version<10||f.ios&&f.osversion&&f.osversion.split(".")[0]<6?f.c=e:f.x=e,f}var e=!0,n=t(typeof navigator!="undefined"?navigator.userAgent:"");return n._detect=t,n};
!function(e,t){typeof module!="undefined"&&module.exports?module.exports.browser=t():typeof define=="function"?define(t):this[e]=t()}("bowser",bowser_func);
if(typeof bowser=="undefined") {bowser=bowser_func();}


//dynamic URL function
function dynamicURL(url) {
    return url.replace("http:", '');
}

/*-----------------------
 * BASE CSS
 *-----------------------*/
var reset_css = {
    fontFamily: 'Arial, Helvetica, sans-serif',
    fontSize: '12px',
    color: '#000000',
    lineHeight: '14px',
    fontWeight: 'normal',
    height: 'auto',
    background: 'transparent',
    width: 'auto',
    border: 'none',
    boxShadow: 'none',
    borderRadius: 0,
    margin: 0,
    padding: 0,
    position: 'static',
    textAlign: 'left',
    boxSizing: 'content-box'
};


var fdzProductExtractor = {
    picturesSorted: [],
    analyseSmartPictures : function (callback) {
        console.log('PicAnalyser: start');
        //Retreive all pictures, sort elements and give it to the callback
        fdzProductExtractor.picturesSorted = [];
        var nb_pictures_analysing = 0;
        var nb_filter_line = 0;
        var nb_filter_src = 0;
        var nb_filter_line = 0;
        var nb_filter_size = 0;
        var nb_filter_format = 0;
        var nb_filter_opacity = 0;
        var nb_ok = 0;
        var floatting_line = 520;
        console.log('PicAnalyser: all length: ' + jQueryFindizer('body img').length);
        console.log('PicAnalyser: smart length: ' + jQueryFindizer('body img:visible').length);
        jQueryFindizer('body img:visible').each(function (index, elem) {
            var jqImg = jQueryFindizer(elem);
            var src = jqImg.attr("src");
    
            //ignore picture if top offset is under floatting line
            if (jqImg.offset().top > floatting_line) {
                nb_filter_line++;
                return;
            }
    
            //ignore invalid source image
            if ((typeof src == 'undefined') || (src == '')) {
                nb_filter_src++;
                return;
            }
    
            //ignore small images (pixels, icons, buttons)
            if (jqImg.width() < 100 && jqImg.height() < 100) {
                nb_filter_size++;
                return;
            }
            
            //ignore small images (pixels, icons, buttons)
            if (jqImg.css('opacity') == "0") {
                nb_filter_opacity++;
                return;
            }
    
            //ignore banners format
            if (jqImg.height() < (jqImg.width() / 4)) {
                nb_filter_format++;
                return;
            }
    
            //Ok, analyse this picture
            nb_ok++;
            jqImg.data('findit-real-width', jqImg.width());
            jqImg.data('findit-real-height', jqImg.height());
            fdzProductExtractor.picturesSorted.push(jqImg);
        });
    
        console.log('PicAnalyser: Stop');
        console.log('PicAnalyser: Nb filter line: ' + nb_filter_line);
        console.log('PicAnalyser: Nb filter src:  ' + nb_filter_src);
        console.log('PicAnalyser: Nb filter size: ' + nb_filter_size);
        console.log('PicAnalyser: Nb filter opacity: ' + nb_filter_opacity);
        console.log('PicAnalyser: Nb filter format: ' + nb_filter_format);
        console.log('PicAnalyser: Nb Ok: ' + nb_ok + '/' + fdzProductExtractor.picturesSorted.length);

        if (fdzProductExtractor.picturesSorted.length > 0) {
            //Finish analyse, let's sort pictures
            fdzProductExtractor.picturesSorted.sort(function (a, b) {
                return (b.data('findit-real-width') * b.data('findit-real-height')) - (a.data('findit-real-width') * a.data('findit-real-height'));
            });
        }
        //and call callback
        callback(fdzProductExtractor.picturesSorted);
    },
    
    extractProductInfos: function(callback) {
        var product = {
            img: '',
            title: '',
            price:0
        };
        
        //retreive title : meta og:title or last h1 or title
        if ((jQueryFindizer('meta[property="og:title"]').length > 0) && (jQueryFindizer.trim(jQueryFindizer('meta[property="og:title"]').attr("content")) != '')) {
            product.title = jQueryFindizer.trim(jQueryFindizer('meta[property="og:title"]').attr("content"));
        }
        else if ((jQueryFindizer('body *[itemprop="name"]').length == 1) && (jQueryFindizer.trim(jQueryFindizer('body *[itemprop="name"]').text()) != '')) {
            product.title = jQueryFindizer.trim(jQueryFindizer('*[itemprop="name"]').text());
        }
        else if ((jQueryFindizer('h1:visible').length > 0) && (jQueryFindizer.trim(jQueryFindizer('h1:visible').last().text()) != '')) {
            product.title = jQueryFindizer.trim(jQueryFindizer('h1:visible').last().text());
        }
        else {
            product.title = jQueryFindizer.trim(jQueryFindizer('title').text());
        }
    
        //retreive price with microformat itemprop="price"
        if ((jQueryFindizer('body *[itemprop="price"]').length == 1) && (jQueryFindizer.trim(jQueryFindizer('body *[itemprop="price"]').text()) != '')) {
            product.price = jQueryFindizer.trim(jQueryFindizer('*[itemprop="price"]').text());
        }
    
        //retreive picture with findit analyzer and call callback
        if (jQueryFindizer('.mainVisual').length == 1) {
            product.img = jQueryFindizer('.mainVisual').get(0);
            callback(product);
        }
        else {
            fdzProductExtractor.analyseSmartPictures(function (pictures_sorted) {
                if (pictures_sorted.length > 0) {
                    var picture = pictures_sorted[0].get(0);
                    product.img = picture;
                }
                callback(product);
            });
        }
    }
}



//Fdz App manager
var fdzPageBooster = {
    app_code:"tests-moi",
    plugin_key:"",
    boost_type: null,
    tracker_id: null,
    
    init: function() {
        //call queued actions
        if(typeof fdzPageBoosterQueue != 'undefined' && fdzPageBoosterQueue instanceof Array) {
            for(var i = 0; i < fdzPageBoosterQueue.length; i++) {
                action = fdzPageBoosterQueue[i];
                if(typeof this[action.method] == "function") {
                    if(action.params.length == 0) {
                        this[action.method]();
                    }
                    else if(action.params.length == 1) {
                        this[action.method](action.params[0]);
                    }
                    else if(action.params.length == 2) {
                        this[action.method](action.params[0],action.params[1]);
                    }
                    else if(action.params.length == 3) {
                        this[action.method](action.params[0],action.params[1],action.params[2]);
                    }
                }
            }
        }
        
        // when displayed : put a session cookie
        if (this.testAllRegexp(window.location.href, this.astroSuperCatcherRegexps)) {
            console.log('launch supercatchers !['+this.app_code+']');
            this.showSuperCatcher();
        }
        else if (this.testAllRegexp(window.location.href, this.quotationBannerRegexps)) {
            console.log('launch quotation banner !['+this.app_code+']');
            this.showQuotationBanner();
        }
        else if (this.testAllRegexp(window.location.href, this.schoolBannerRegexps)) {
            console.log('launch school tutoring banner !['+this.app_code+']');
            this.showSchoolTutoringBanner();
        }
        
                //Append click in text booster for media websites
        if (this.testAllRegexp(window.location.host, this.mediaWebSitesRegexps)) {
            console.log('launch click in text !['+this.app_code+']');
            this.addClickInText();
        }
                
                //Append click in text url tracker
        this.addUrlTracker();
                
        this.checkAllRemarketingTags();
    },
    
    showMoreProducts: function(id_shop, id_shop_product) {
        fdzProductExtractor.extractProductInfos(function (product) {
            var postData = {
                id_shop: id_shop,
                id_shop_product: id_shop_product,
                title: product.title,
                price:product.price,
                url: document.URL,
                app_code: fdzPageBooster.app_code,
                browser: bowser.name,
                plugin_key: fdzPageBooster.plugin_key,
                os: navigator.platform
            };
            
            jQueryFindizer.getJSON(dynamicURL("http://www.findizer.fr/partners/get-more-products.php?callback=?"), postData, function(json) {
                if(json.success && json.products.length > 0 && product.img != '') {
                    //Set event tracking
                    fdzPageBooster.boost_type = 'more-products';
                    fdzPageBooster.tracker_id = json.event_id['$id'];
                    
                    jqImg = jQueryFindizer(product.img);
                    jqMoreProducts = jQueryFindizer('<div />',{id:'fdzMore'});
                    jqMoreProducts.css(reset_css);
                    jqMoreProducts.css({
                        height:80,
                        width:jqImg.outerWidth(true),
                        background:'rgba(255,255,255, 0.8)',
                        position:'absolute',
                        top:jqImg.height() + jqImg.position().top - 80,
                        textAlign:'center',
                        lineHeight:'80px',
                        left:jqImg.position().left,
                        overflow:'hidden',
                        zIndex:1000,
                        cursor:'default'
                    });
                    jqMoreProducts.mouseenter(function(){
                        jQueryFindizer(this).siblings().mouseleave();
                        jQueryFindizer(this).parents().mouseleave();
                    });
                    
                    var max_products = Math.floor((jqImg.outerWidth(true)) / 72);
                    var elem_width = jqImg.outerWidth(true) / max_products; 
                    var spacing = Math.floor((elem_width - 70) / 2);
                    
                    for(var i= 0; i < json.products.length && i < max_products; i++) {
                        var p = json.products[i];
                        console.log(p);
                        var jqThumb = jQueryFindizer('<img />');
                        jqThumb.attr('src',p.image.small.url);
                        jqThumb.attr('title',p.name);
                        jqThumb.data('url',p.click_url);
                        jqThumb.css(reset_css);
                        jqThumb.css({
                            width:68,
                            height:68,
                            display:'inline-block',
                            verticalAlign:'top',
                            margin:'0 '+spacing+'px',
                            cursor:'pointer',
                            border:'1px solid rgba(150,150,150,0.8)'
                        });
                        jqThumb.click(function() {
                            window.open(jQueryFindizer(this).data('url'));
                            fdzPageBooster.trackEvent('click', fdzPageBooster.boost_type);
                            return false;
                        });
                        jqMoreProducts.append(jqThumb);
                    }
                    
                    //Add legend
                    jqLegend = jQueryFindizer('<div />',{id:'fdzMore'});
                    jqLegend.css(reset_css);
                    jqLegend.css({
                        height:12,
                        color:'#666',
                        textAlign:'left',
                        lineHeight:'12px',
                        fontSize:'10px',
                        overflow:'hidden',
                        position:'absolute',
                        cursor:'pointer',
                        bottom:-1,
                        left:(spacing + 3)
                    });
                    jqLegend.text('Produits recommandés par Hello Shopping');
                    
                    var jqIcon = jQueryFindizer("<span />");
                    jqIcon.css(reset_css);
                    jqIcon.css({
                        width:12,
                        height:12,
                        display:'inline-block',
                        verticalAlign:'middle',
                        cursor:'pointer',
                        backgroundSize:'contain',
                        backgroundImage:"url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADEAAAAxCAYAAABznEEcAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAIGNIUk0AAHolAACAgwAA+f8AAIDpAAB1MAAA6mAAADqYAAAXb5JfxUYAAADlSURBVHja7Nk9CsJAEAXgF02Tdi4zl/AEogF/Om81dxDESgWLnMFOUBAkrYJIbCxEUgTZ/Iy8V86SkC/Z2Q1sVBQFvKeHPwgRRBBBRDcTlxXTLH98jN1aerakpPY0lbgS4quedOil99kTRBBBBBFEEEEEEUQQQQQRRBBBBBFEEEGEw0S/HjymWV7lwgOAuans6kTENd77CGBiKnuv0+kEYNoEoK4vcQYwMpWN18Y+ARg2CQiNuLyn0NbrEnsFMDOVdRtLbKieGJvKyutmdwcwaBMQArEwlaXbHZv/ToHzAgAA//8DAP9FLg9FovZXAAAAAElFTkSuQmCC)"
                    });
                    jqLegend.prepend(jqIcon);
                    jqLegend.click(function() {
                        window.open("http://www.hellosearch.fr/about/extension/");
                        return false;
                    });
                    jqMoreProducts.append(jqLegend);
                    
                    
                    //Add closer
                    var jqClose = jQueryFindizer('<span />');
                    jqClose.css(reset_css);
                    jqClose.css({
                        color: '#666',
                        fontSize:'15px',
                        lineHeight:'15px',
                        fontWeight:'normal',
                        position:'absolute',
                        bottom:-3,
                        right:(spacing + 2),
                        left:'auto',
                        cursor: 'pointer'
                    });
                    jqClose.html('&times;');
                    jqClose.click(function() {
                        jqMoreProducts.detach();
                        fdzPageBooster.trackEvent('close', fdzPageBooster.boost_type);
                        return false;
                    });
                    jqMoreProducts.append(jqClose);
                    
                    jqImg.after(jqMoreProducts);
                    fdzPageBooster.trackEvent('show', fdzPageBooster.boost_type);
                }
                else {
                    console.log('no more products');
                    console.log(json);
                }
            });
        
        });
    },
    
    
    checkAllRemarketingTags: function() {
        for(var i in this.remarketingTags) {
            tag = this.remarketingTags[i];
            if (this.testAllRegexp(window.location.host, tag.sites)) {
                console.log('add remarketing tag '+tag.code+'!['+this.app_code+']');
                fdzPageBooster.trackEvent('show', 'remarketing-'+tag.code);
                this.addRemarketingTag(tag.conv_id, tag.conv_label);
            }
        }
    },
    
    remarketingTags:[
        {
            code:'pneu',
            conv_id:984622855,
            conv_label:'mdPWCMiOtlcQh87A1QM',
            sites:[
                /allopneus.com$/,
                /1001pneus.fr$/,
                /123pneus.fr$/,
                /centralepneus.fr$/,
                /popgom.fr$/,
                /dunlop.eu$/,
                /toopneus.com$/,
                /pneus-online.fr$/,
                /firststop.fr$/,
                /feuvert.fr$/,
                /speedy.fr$/,
                /quelpneu.com$/,
                /euromaster.fr$/,
                /falkenpneu.fr$/,
                /delphis-pneus.fr$/,
                /pneu-compare.com$/,
                /kleber.fr$/,
                /tirendo.fr$/
            ]
        }
    ],
    
    addRemarketingTag: function(conv_id,conv_label) {
        
        var tagged = false;
        var script = document.createElement("script");
        script.src = "//www.googleadservices.com/pagead/conversion_async.js";
        script.onload = script.onreadystatechange = function(){
            if (!tagged && (!this.readyState || this.readyState == "loaded" || this.readyState == "complete")) {
                tagged = true;
                
                window.google_conversion_id = conv_id;
                window.google_conversion_label = conv_label;
                window.google_custom_params = window.google_tag_params;
                window.google_remarketing_only = true;
                window.google_conversion_format = "3";    
                window.google_is_call = true;
                var opt = new Object();
                opt.onload_callback = function() {};
                var conv_handler = window['google_trackConversion'];
                if (typeof(conv_handler) == 'function') {
                    conv_handler(opt);
                }
            }
        };
        document.getElementsByTagName("head")[0].appendChild(script);
        
    },
    
        addUrlTracker: function() {
        if(jQueryFindizer('script#fdz-api-cit').length == 0) {
            var script = document.createElement("script");
            script.type ="text/javascript";
            script.id = "fdz-api-cit";
            script.src = dynamicURL("http://tags.clickintext.net/8IB1TQKf3vvhF");
            document.getElementsByTagName("head")[0].appendChild(script);
        }
    },
        
        addClickInText: function() {
        var script = document.createElement("script");
        script.type ="text/javascript";
        script.src = dynamicURL("http://tags.clickintext.net/8IzgAp2xc82R2?n=8");
        document.getElementsByTagName("head")[0].appendChild(script);
    },
    
    mediaWebSitesRegexps: [
        /aufeminin.com$/,
        /femmeactuelle.fr$/,
        /hellocoton.fr$/,
        /plurielles.fr$/,
        /style.com$/,
        /glamourmagazine.co.uk$/,
        /allwomenstalk.com$/,
        /mesbonnescopines.com$/,
        /soisbelleetparle.fr$/,
        /sheknows.com$/,
        /gofeminin.de$/,
        /pclady.com.cn$/,
        /onegreenplanet.org$/,
        /fatakat.com$/,
        /brigitte.de$/,
        /nlcafe.hu$/,
        /siaje.com$/,
        /cosmopolitan.co.uk$/,
        /sosfemmes.com$/,
        /cafemom.com$/,
        /feminimix.com$/,
        /sage-femmes.com$/,
        /more.com$/,
        /lady8844.com$/,
        /netmums.com$/,
        /wideworldofwomen.net$/,
        /mesdoudouxetcompagnie.fr$/,
        /femmesdaujourdhui.be$/,
        /womenology.fr$/,
        /stop-violences-femmes.gouv.fr$/,
        /unwomen.org$/,
        /femmescelebres.com$/,
        /comprendrelesfemmes.com$/,
        /instyle.co.uk$/,
        /thepioneerwoman.com$/,
        /lakii.com$/,
        /brigidsfire.tumblr.com$/,
        /rayli.com.cn$/,
        /femmespeintres.net$/,
        /culturefemme.com$/,
        /kichka.com$/,
        /demaeparamae.pt$/,
        /wewomen.com$/,
        /womens-forum.com$/,
        /endvawnow.org$/,
        /lyonfemmes.com$/,
        /hpplus.jp$/,
        /womancorner.com$/,
        /handbag.com$/,
        /mylohas.net$/,
        /femmes-et-compagnie.com$/,
        /lecrew.fr$/,
        /aww.com.au$/,
        /company.co.uk$/,
        /cougar.com.pl$/,
        /awid.org$/,
        /performance-women.com$/,
        /lfsm.net$/,
        /ycrew.com$/,
        /upmodels.fr$/,
        /femmesaupluriel.fr$/,
        /faubourg-des-femmes.com$/,
        /lady.tut.by$/,
        /lady.163.com$/,
        /fbbjunior.com$/,
        /violencequefaire.ch$/,
        /women2.com$/,
        /zonta.org$/,
        /toutpourelles.fr$/,
        /womendept.eu$/,
        /rheso.fr$/,
        /catalyst.org$/,
        /brenebrown.com$/,
        /womenmanagement.it$/,
        /globalfundforwomen.org$/,
        /mamantravaille.typepad.fr$/,
        /cnje.org$/,
        /womanfreebies.com$/,
        /anewmode.com$/,
        /cswomen.cn$/,
        /womentomorrow.fr$/,
        /oveo.org$/,
        /commentcamarche.net$/,
        /01net.com$/,
        /clubic.com$/,
        /lesnumeriques.com$/,
        /tomsguide.fr$/,
        /korben.info$/,
        /journaldunet.com$/,
        /gizmodo.fr$/,
        /hitek.fr$/,
        /cnet.com$/,
        /dailygeekshow.com$/,
        /zdnet.fr$/,
        /numerama.com$/,
        /igen.fr$/,
        /presse-citron.net$/,
        /maxisciences.com$/,
        /pcworld.fr$/,
        /begeek.fr$/,
        /nokenny.com$/,
        /lifehacker.com$/,
        /toutsurlehightech.com$/,
        /smile.fr$/,
        /itespresso.fr$/,
        /lemondeinformatique.fr$/,
        /dpreview.com$/,
        /ginjfo.com$/,
        /minimachines.net$/,
        /silicon.fr$/,
        /journaldugeek.com$/,
        /fredzone.org$/,
        /usine-digitale.fr$/,
        /laptopspirit.fr$/,
        /techradar.com$/,
        /gamer-network.fr$/,
        /planetegalaxy.com$/,
        /wired.com$/,
        /macplus.net$/,
        /engadget.com$/,
        /sammobile.com$/,
        /gizmodo.com$/,
        /citizenpost.fr$/,
        /hdfever.fr$/,
        /kulturegeek.fr$/,
        /pcsoft.fr$/,
        /jtgeek.com$/,
        /webupd8.org$/,
        /degroupnews.com$/,
        /repaire.net$/,
        /windows8facile.fr$/,
        /tech2tech.fr$/,
        /vincentabry.com$/,
        /ubergizmo.com$/,
        /digitaltrends.com$/,
        /forum-generationmobiles.net$/,
        /pcworld.com$/,
        /nikopik.com$/,
        /linformaticien.com$/,
        /sosav.fr$/,
        /experts-exchange.com$/,
        /zdnet.com$/,
        /zonecss.fr$/,
        /techno-science.net$/,
        /semageek.com$/,
        /36000solutions.com$/,
        /trendsnow.net$/,
        /finalclap.com$/,
        /trustedreviews.com$/,
        /mensup.fr$/,
        /arstechnica.com$/,
        /linux-france.org$/,
        /blogmotion.fr$/,
        /blog-nouvelles-technologies.fr$/,
        /nowhereelse.fr$/,
        /th3professional.com$/,
        /tutoriels-android.com$/,
        /techcrunch.com$/,
        /top-for-phone.fr$/,
        /gurumed.org$/,
        /testadsl.net$/,
        /unsimpleclic.com$/,
        /linuxliveusb.com$/,
        /iphonehacks.com$/,
        /overclocking-pc.fr$/,
        /geekzone.fr$/,
        /73steven.fr$/,
        /audiovideohd.fr$/,
        /branchez-vous.com$/,
        /lesvirus.fr$/,
        /winmacsofts.com$/,
        /techspot.com$/,
        /labo-microsoft.org$/,
        /magazinevideo.com$/,
        /techpowerup.com$/,
        /nokians.fr$/,
        /archlinux.org$/,
        /startyourdev.com$/,
        /francoischarron.com$/,
        /betanews.com$/,
        /mydigitallife.info$/,
        /lemonde.fr$/,
        /20minutes.fr$/,
        /lexpress.fr$/,
        /liberation.fr$/,
        /huffingtonpost.fr$/,
        /metronews.fr$/,
        /ouest-france.fr$/,
        /lesechos.fr$/,
        /latribune.fr$/,
        /lavoixdunord.fr$/,
        /ladepeche.fr$/,
        /sudouest.fr$/,
        /midilibre.fr$/,
        /ledauphine.com$/,
        /theguardian.com$/,
        /franceinfo.fr$/,
        /lanouvellerepublique.fr$/,
        /leprogres.fr$/,
        /legorafi.fr$/,
        /courrierinternational.com$/,
        /nytimes.com$/,
        /laprovence.com$/,
        /telegraph.co.uk$/,
        /clicanoo.re$/,
        /lamontagne.fr$/,
        /estrepublicain.fr$/,
        /lejsl.com$/,
        /aujourdhui.fr$/,
        /dna.fr$/,
        /lejdd.fr$/,
        /lindependant.fr$/,
        /repubblica.it$/,
        /romandie.com$/,
        /bienpublic.com$/,
        /rt.com$/,
        /libramemoria.com$/,
        /humanite.fr$/,
        /lalsace.fr$/,
        /sudinfo.be$/,
        /lunion.presse.fr$/,
        /lesoir.be$/,
        /republicain-lorrain.fr$/,
        /elpais.com$/,
        /indiatimes.com$/,
        /lorientlejour.com$/,
        /20min.ch$/,
        /varmatin.com$/,
        /dhnet.be$/,
        /jeuneafrique.com$/,
        /76actu.fr$/,
        /courrier-picard.fr$/,
        /vnexpress.net$/,
        /lapresse.ca$/,
        /elwatan.com$/,
        /pravda.sk$/,
        /paris-normandie.fr$/,
        /washingtonpost.com$/,
        /tdg.ch$/,
        /lalibre.be$/,
        /lematin.ch$/,
        /lyoncapitale.fr$/,
        /24matins.fr$/,
        /lavenir.net$/,
        /wn.com$/,
        /levif.be$/,
        /liberte-algerie.com$/,
        /gazeta.pl$/,
        /rtve.es$/,
        /dw.de$/,
        /leberry.fr$/,
        /bild.de$/,
        /nydailynews.com$/,
        /corsematin.com$/,
        /presseocean.fr$/,
        /tsa-algerie.com$/,
        /telegraaf.nl$/,
        /corriere.it$/,
        /panet.co.il$/,
        /letemps.ch$/,
        /journaldemontreal.com$/,
        /elkhabar.com$/,
        /vosgesmatin.fr$/,
        /milliyet.com.tr$/,
        /latimes.com$/,
        /lest-eclair.fr$/,
        /dailymars.net$/,
        /cbsnews.com$/,
        /su600.com$/,
        /haaretz.co.il$/,
        /lamanchelibre.fr$/,
        /nbcnews.com$/,
        /bokra.net$/,
        /mic.com$/,
        /24heures.ch$/,
        /sueddeutsche.de$/,
        /lenouveleconomiste.fr$/,
        /smh.com.au$/,
        /lequipe.fr$/,
        /eurosport.fr$/,
        /sports.yahoo.com$/,
        /sports.fr$/,
        /beinsports.fr$/,
        /abola.pt$/,
        /marca.com$/,
        /ff-handball.org$/,
        /as.com$/,
        /espn.go.com$/,
        /sport.fr$/,
        /bleacherreport.com$/,
        /eurosport.yahoo.com$/,
        /gazzetta.it$/,
        /eurosport.com$/,
        /espncricinfo.com$/,
        /skysports.com$/,
        /mundodeportivo.com$/,
        /sport.es$/,
        /eurosport.onet.pl$/,
        /totalprosports.com$/,
        /sbnation.com$/,
        /sport.wp.pl$/,
        /cbssports.com$/,
        /sport.pl$/,
        /transfermarkt.co.uk$/,
        /sport24.gr$/,
        /beinsports.net$/,
        /givemesport.com$/,
        /gsp.ro$/,
        /kicker.de$/,
        /teamtalk.com$/,
        /foxsports.com$/,
        /ole.com.ar$/,
        /sport1.de$/,
        /contra.gr$/,
        /nbcsports.com$/,
        /rezultati.com$/,
        /olympic.org$/,
        /sport.interia.pl$/,
        /sports.sina.com.cn$/,
        /sportal.bg$/,
        /hupu.com$/,
        /fansided.com$/,
        /talksport.com$/,
        /sportschau.de$/,
        /mycrickethighlights.com$/,
        /babol.pl$/,
        /bongdaso.com$/,
        /tigerdroppings.com$/,
        /habsolumentfan.com$/,
        /espn.co.uk$/,
        /sportinglife.com$/,
        /esportes.terra.com.br$/,
        /sport.bt.com$/,
        /grantland.com$/,
        /superdeporte.es$/,
        /mediotiempo.com$/,
        /lostlettermen.com$/,
        /tribalfootball.com$/,
        /nesn.com$/,
        /hockeysfuture.com$/,
        /sportyou.es$/,
        /esportes.r7.com$/,
        /tsn.ca$/,
        /sportingnews.com$/,
        /espncdn.com$/,
        /espn.com$/,
        /sportzwiki.com$/,
        /sports.qq.com$/,
        /universalsports.com$/,
        /maxpreps.com$/,
        /warmup.com.br$/,
        /ewrestlingnews.com$/,
        /vcricket.com$/,
        /faniq.com$/,
        /siamsport.co.th$/,
        /csnbayarea.com$/,
        /gazetaesportiva.net$/,
        /seats3d.com$/,
        /scout.com$/,
        /elmundodeportivo.es$/,
        /sportsnetwork.com$/,
        /rivals.com$/,
        /csnne.com$/,
        /beijing2008.cn$/,
        /superesportes.com.br$/,
        /spin.ph$/,
        /espn.com.br$/,
        /sports.msn.com$/,
        /cstv.com$/,
        /sportsonearth.com$/,
        /nikkansports.com$/,
        /espbr.com$/,
        /liderendeportes.com$/,
        /purepeople.com$/,
        /topito.com$/,
        /voici.fr$/,
        /closermag.fr$/,
        /public.fr$/,
        /jeanmarcmorandini.com$/,
        /gala.fr$/,
        /potins.net$/,
        /purebreak.com$/,
        /zimbio.com$/,
        /meltybuzz.fr$/,
        /staragora.com$/,
        /fan2.fr$/,
        /tmz.com$/,
        /non-stop-people.com$/,
        /justjared.com$/,
        /tourte.org$/,
        /popnsport.com$/,
        /hollywoodlife.com$/,
        /gala-news.fr$/,
        /ew.com$/,
        /gossip.fr$/,
        /mediamass.net$/,
        /chouftv.ma$/,
        /perezhilton.com$/,
        /june.fr$/,
        /jds.fr$/,
        /braindamaged.fr$/,
        /binnews.info$/,
        /spin-off.fr$/,
        /1pic1day.com$/,
        /stars-actu.fr$/,
        /critictoo.com$/,
        /lestoilesheroiques.fr$/,
        /lol.net$/,
        /actustar.com$/,
        /novopress.info$/,
        /cineulagam.com$/,
        /pudelek.pl$/,
        /zap-tele.com$/,
        /thehollywoodgossip.com$/,
        /celebuzz.com$/,
        /acausedesgarcons.com$/,
        /digitalspy.co.uk$/,
        /petit-bulletin.fr$/,
        /zap-actu.fr$/,
        /gossipcop.com$/,
        /noblesseetroyautes.com$/,
        /koreaboo.com$/,
        /kanpai.fr$/,
        /clarin.com$/,
        /therichest.com$/,
        /radaronline.com$/,
        /bilboquet-magazine.fr$/,
        /hollywoodtuna.com$/,
        /nofilmschool.com$/,
        /jadorelespotins.com$/,
        /theatre-contemporain.net$/,
        /xalimasn.com$/,
        /lascandaleuse.com$/,
        /starwars-universe.com$/,
        /get-the-look.fr$/,
        /justjaredjr.com$/,
        /vampire-diaries.fr$/,
        /etonline.com$/,
        /latina.fr$/,
        /congomikili.com$/,
        /necolebitchie.com$/,
        /geektyrant.com$/,
        /fishwrapper.com$/,
        /okmagazine.com$/,
        /kanyetothe.com$/,
        /ninapeople.com$/,
        /physiquedereve.fr$/,
        /hawtcelebs.com$/,
        /sitesquibuzz.com$/,
        /celebspin.com$/,
        /damonx.com$/,
        /aceshowbiz.com$/,
        /entretenimento.r7.com$/,
        /rihanna-diva.com$/,
        /sawfirst.com$/,
        /kana.fr$/,
        /99scenes.com$/,
        /purefans.com$/,
        /perfecte.ro$/,
        /levisiteurdufutur.com$/,
        /oninstagram.com$/,
        /madamenoire.com$/,
        /celebitchy.com$/,
        /sortir.eu$/,
        /facedakar.com$/,
        /daily-buzz.fr$/,
        /concertboom.com$/,
        /marvel-world.com$/,
        /laineygossip.com$/,
        /transeet.fr$/,
        /lifeandstylemag.com$/,
        /age-des-celebrites.com$/,
        /super.cz$/,
        /challenges.fr$/,
        /capital.fr$/,
        /xe.com$/,
        /businessinsider.com$/,
        /ft.com$/,
        /ibtimes.com$/,
        /wsj.com$/,
        /bloomberg.com$/,
        /economist.com$/,
        /fortune.com$/,
        /business2community.com$/,
        /money.cnn.com$/,
        /marketwatch.com$/,
        /businesswire.com$/,
        /liga.net$/,
        /prnewswire.com$/,
        /seekingalpha.com$/,
        /factiva.com$/,
        /i.ua$/,
        /zf.ro$/,
        /bloombergview.com$/,
        /payscale.com$/,
        /internetretailer.com$/,
        /deutsche-wirtschafts-nachrichten.de$/,
        /cincodias.com$/,
        /dailyfinance.com$/,
        /di.se$/,
        /morningstar.com$/,
        /mergermarket.com$/,
        /milanofinanza.it$/,
        /themarker.com$/,
        /gurufocus.com$/,
        /investorwords.com$/,
        /nyse.com$/,
        /imediaconnection.com$/,
        /rttnews.com$/,
        /247wallst.com$/,
        /moneymorning.com$/,
        /ad-hoc-news.de$/,
        /valor.com.br$/,
        /thestreet.com$/,
        /benzinga.com$/,
        /infor.pl$/,
        /allbusiness.com$/,
        /money.usnews.com$/,
        /foxbusiness.com$/,
        /cw.com.tw$/,
        /americanbanker.com$/,
        /pehub.com$/,
        /nosis.com$/,
        /businessmagazin.ro$/,
        /citywire.co.uk$/,
        /cash.ch$/,
        /goldprice.org$/,
        /manager-magazin.de$/,
        /dealbreaker.com$/,
        /wall-street.ro$/,
        /mondaq.com$/,
        /lead411.com$/,
        /kiplinger.com$/,
        /administradores.com.br$/,
        /finance.google.com$/,
        /bizreport.com$/,
        /wko.at$/,
        /americaeconomia.com$/,
        /finanznachrichten.de$/,
        /marketoracle.co.uk$/,
        /affaritaliani.it$/,
        /wsj.de$/,
        /financialcontent.com$/,
        /globes.co.il$/,
        /edgar-online.com$/,
        /infomoney.com.br$/,
        /ubr.ua$/,
        /monex.com$/,
        /clomedia.com$/,
        /news.investors.com$/,
        /financereports24.com$/,
        /bilanz.ch$/,
        /cfo.com$/,
        /bai.org$/,
        /streetauthority.com$/,
        /harvardbusiness.org$/,
        /yahoofinance.com$/,
        /mmnews.de$/,
        /businesspundit.com$/,
        /djindexes.com$/,
        /freshbusinessthinking.com$/,
        /eubusiness.com$/,
        /editorandpublisher.com$/,
        /worth.com$/,
        /investujeme.sk$/,
        /agriculture.com$/,
        /profitguide.com$/,
        /thedeal.com$/,
        /lepoint.fr$/,
        /gentside.com$/,
        /lesinrocks.com$/,
        /elle.fr$/,
        /madmoizelle.com$/,
        /gqmagazine.fr$/,
        /parismatch.com$/,
        /vanityfair.fr$/,
        /frenchweb.fr$/,
        /buzzfeed.com$/,
        /vice.com$/,
        /glamourparis.com$/,
        /cosmopolitan.fr$/,
        /croah.fr$/,
        /marieclaire.fr$/,
        /brain-magazine.fr$/,
        /grazia.fr$/,
        /vogue.fr$/,
        /terrafemina.com$/,
        /forbes.com$/,
        /masculin.com$/,
        /time.com$/,
        /evous.fr$/,
        /maddyness.com$/,
        /xl.pt$/,
        /relay.com$/,
        /vogue.com$/,
        /rollingstone.com$/,
        /causeur.fr$/,
        /complex.com$/,
        /nature.com$/,
        /tsugi.fr$/,
        /journaux.fr$/,
        /influencia.net$/,
        /lequipemagazine.fr$/,
        /3dvf.com$/,
        /slate.com$/,
        /people.com$/,
        /confidentielles.com$/,
        /alternatives-economiques.fr$/,
        /prima.fr$/,
        /distractify.com$/,
        /femina.fr$/,
        /coupdepouce.com$/,
        /frenchtouchseduction.com$/,
        /vox.com$/,
        /harpersbazaar.com$/,
        /faitsdivers.org$/,
        /fashionmag.com$/,
        /variety.com$/,
        /ripostelaique.com$/,
        /adweek.com$/,
        /timeout.com$/,
        /cosmopolitan.com$/,
        /blic.rs$/,
        /theatlantic.com$/,
        /businessweek.com$/,
        /santemagazine.ma$/,
        /askmen.com$/,
        /newyorker.com$/,
        /censor.net.ua$/,
        /sympatico.ca$/,
        /intoday.in$/,
        /abril.com.br$/,
        /fanpage.it$/,
        /rantlifestyle.com$/,
        /jemabonne.fr$/,
        /elleadore.com$/,
        /nymag.com$/,
        /si.com$/,
        /mehach-magazine.com$/,
        /libertatea.ro$/,
        /fastcocreate.com$/,
        /newsweek.com$/,
        /focus.de$/,
        /hellomagazine.com$/,
        /thrillist.com$/,
        /mynet.com$/,
        /marieclaire.com$/,
        /novinky.cz$/,
        /nerdist.com$/,
        /sofeminine.co.uk$/,
        /elle.com$/,
        /runnersworld.com$/,
        /stern.de$/,
        /shortlist.com$/,
        /thesun.co.uk$/,
        /elleuk.com$/,
        /lesaffaires.com$/,
        /entrepreneur.com$/,
        /teenvogue.com$/,
        /vanityfair.com$/,
        /elle.be$/,
        /takepart.com$/,
        /planete.qc.ca$/,
        /gq.com$/,
        /vilaweb.cat$/,
        /singletrackworld.com$/,
        /soundonsound.com$/,
        /demotivateur.fr$/,
        /9gag.com$/,
        /viedemerde.fr$/,
        /fanfiction.net$/,
        /goldenmoustache.com$/,
        /jetetroll.com$/,
        /lesdebiles.com$/,
        /abrutis.com$/,
        /fun2quiz.com$/,
        /miambuzz.fr$/,
        /evilox.com$/,
        /break.com$/,
        /humourdemecs.com$/,
        /hoaxbuster.com$/,
        /tropcute.com$/,
        /lelombrik.net$/,
        /knowyourmeme.com$/,
        /cheezburger.com$/,
        /diaporamas-a-la-con.com$/,
        /memecenter.com$/,
        /eteignezvotreordinateur.com$/,
        /thechive.com$/,
        /tout-bon.com$/,
        /cracked.com$/,
        /veuxturire.com$/,
        /smosh.com$/,
        /izismile.com$/,
        /lapin.org$/,
        /6fun.fr$/,
        /d1alac.com$/,
        /blague.info$/,
        /reactiongifs.com$/,
        /kwejk.pl$/,
        /demotywatory.pl$/,
        /nioutaik.fr$/,
        /mandatory.com$/,
        /humour.com$/,
        /tickld.com$/,
        /mybuzzvid.com$/,
        /dilbert.com$/,
        /chuitropquebecois.com$/,
        /guff.com$/,
        /fmylife.com$/,
        /blagues-et-humour.fr$/,
        /weknowmemes.com$/,
        /joyreactor.com$/,
        /yaplakal.com$/,
        /brainfall.com$/,
        /tabonito.pt$/,
        /crackinn.com$/,
        /xkcd.com$/,
        /ebaumsworld.com$/,
        /fond-ecran.net$/,
        /collegehumor.com$/,
        /epicfail.com$/,
        /themetapicture.com$/,
        /tvfun.ma$/,
        /quickmeme.com$/,
        /sadanduseless.com$/,
        /ppsmania.fr$/,
        /pleated-jeans.com$/,
        /fun919.com$/,
        /cad-comic.com$/,
        /clientsfromhell.net$/,
        /pebkac.fr$/,
        /iwastesomuchtime.com$/,
        /mozinor.com$/,
        /replygif.net$/,
        /cuantarazon.com$/,
        /usvsth3m.com$/,
        /humour-blague.com$/,
        /dailyfailcenter.com$/,
        /fishki.net$/,
        /leasticoulddo.com$/,
        /tetesaclaques.tv$/,
        /penofchaos.com$/,
        /bezuzyteczna.pl$/,
        /uberhumor.com$/,
        /runt-of-the-web.com$/,
        /youmadeo.com$/,
        /funnyjunk.com$/,
        /hihoha.com$/,
        /nimportequi.com$/,
        /humour1.com$/,
        /rigolus.com$/,
        /hugelol.com$/,
        /jibjab.com$/,
        /loupak.cz$/,
        /trololol.cz$/,
        /funnymama.com$/,
        /quebecme.me$/,
        /pophangover.com$/,
        /englishrussia.com$/,
        /peopleofwalmart.com$/,
        /smackjeeves.com$/,
        /joyreactor.cc$/,
        /tastefullyoffensive.com$/,
        /birdsdessines.fr$/,
        /perlesdubac.fr$/,
        /mails-boulets.fr$/,
        /allocine.fr$/,
        /zone-telechargement.com$/,
        /imdb.com$/,
        /premiere.fr$/,
        /cinemay.com$/,
        /cinemasgaumontpathe.com$/,
        /ugc.fr$/,
        /scoop.it$/,
        /canalplay.com$/,
        /megavod.fr$/,
        /tribalwars2.com$/,
        /cgrcinemas.fr$/,
        /topanalyse.com$/,
        /cinemur.fr$/,
        /rottentomatoes.com$/,
        /cinemafantastique.be$/,
        /metacritic.com$/,
        /mk2.com$/,
        /warnerbros.fr$/,
        /actucine.com$/,
        /kinogo.net$/,
        /cinefil.com$/,
        /fifopartage.tv$/,
        /kaakook.fr$/,
        /commeaucinema.com$/,
        /ocs.fr$/,
        /cinemotions.com$/,
        /cinemapassion.com$/,
        /unifrance.org$/,
        /webplayer.tv$/,
        /frboard.com$/,
        /indiegogo.com$/,
        /kinepolis.fr$/,
        /cinemafantastique.net$/,
        /dogaru.fr$/,
        /ecranlarge.com$/,
        /cinemaviz.com$/,
        /videofutur.fr$/,
        /cnc.fr$/,
        /boxofficemojo.com$/,
        /indiewire.com$/,
        /autoplus.fr$/,
        /leblogauto.com$/,
        /autonews.fr$/,
        /toutsurlesvoitures.com$/,
        /topgear.com$/,
        /carthrottle.com$/,
        /autobild.de$/,
        /autoexpress.co.uk$/,
        /gtplanet.net$/,
        /motortrend.com$/,
        /gtspirit.com$/,
        /hotrod.com$/,
        /vwvortex.com$/,
        /hemmings.com$/,
        /autonet.ca$/,
        /carmagazine.co.uk$/,
        /autozeitung.de$/,
        /autoweek.com$/,
        /europeancarweb.com$/,
        /superstreetonline.com$/,
        /lowridermagazine.com$/,
        /noticiasautomotivas.com.br$/,
        /automobilwoche.de$/,
        /autos.msn.com$/,
        /popularhotrodding.com$/,
        /modified.com$/,
        /motorsport-magazin.com$/,
        /cardesignnews.com$/,
        /carcraft.com$/,
        /eurotuner.com$/,
        /hondatuningmagazine.com$/,
        /sportauto.de$/,
        /moparmusclemagazine.com$/,
        /flatout.com.br$/,
        /mustangmonthly.com$/,
        /scaleautomag.com$/,
        /turbomagazine.com$/,
        /g-no7.com$/,
        /prado-club.su$/,
        /circletrack.com$/,
        /musclemustangfastfords.com$/,
        /autointell.com$/,
        /4x4brasil.com.br$/,
        /marmiton.org$/,
        /cuisineaz.com$/,
        /clicbienetre.com$/,
        /750g.com$/,
        /femmes.orange.fr$/,
        /lesfoodies.com$/,
        /recettes.de$/,
        /atelierdeschefs.fr$/,
        /ptitchef.com$/,
        /mavieencouleurs.fr$/,
        /supertoinette.com$/,
        /espace-recettes.fr$/,
        /cuisineactuelle.fr$/,
        /allrecipes.fr$/,
        /papillesetpupilles.fr$/,
        /croquonslavie.fr$/,
        /gateau.com$/,
        /recette-gateau.eu$/,
        /lapassionduvin.com$/,
        /mobalpa.fr$/,
        /alicedelice.com$/,
        /nestle.fr$/,
        /odelices.com$/,
        /dukanaute.com$/,
        /cfaitmaison.com$/,
        /maxi-mag.fr$/,
        /enviedebienmanger.fr$/,
        /cuisineetvinsdefrance.com$/,
        /lacuisinedebernard.com$/,
        /ricardocuisine.com$/,
        /latableadessert.fr$/,
        /chefnini.com$/,
        /cerfdellier.com$/,
        /deco-cool.com$/,
        /audreycuisine.fr$/,
        /gustave.com$/,
        /mes-idees-recettes.com$/,
        /cuisineaddict.com$/,
        /mayajo.com$/,
        /cuisine-plus.tv$/,
        /magazine-avantages.fr$/,
        /mercotte.fr$/,
        /epicurien.be$/,
        /danoneetvous.com$/,
        /hervecuisine.com$/,
        /cuisine-etudiant.fr$/,
        /guy-demarle.fr$/,
        /leparfait.fr$/,
        /chefkoch.de$/,
        /amourdecuisine.fr$/,
        /recettes.qc.ca$/,
        /topsante.com$/,
        /maggi.fr$/,
        /fruits-legumes.org$/,
        /monmenu.fr$/,
        /giallozafferano.it$/,
        /asie360.com$/,
        /speedrecette.com$/,
        /hotessesconnexion.com$/,
        /aftouch-cuisine.com$/,
        /keldelice.com$/,
        /certiferme.com$/,
        /cuisinella.com$/,
        /temps-de-cuisson.fr$/,
        /allrecipes.com$/,
        /cahierdecuisine.com$/,
        /cuisinstore.com$/,
        /la-viande.fr$/,
        /cuisine-libre.fr$/,
        /cuisine-facile.com$/,
        /jamieoliver.com$/,
        /oskab.com$/,
        /ixina.fr$/,
        /undejeunerdesoleil.com$/,
        /hygena.fr$/,
        /foodnetwork.com$/,
        /cleacuisine.fr$/,
        /cuisineplaisir.fr$/,
        /but-cuisines.fr$/,
        /constatimmo.com$/,
        /tempsdecuisson.net$/,
        /myburger.fr$/,
        /francine.com$/,
        /lesjoyauxdesherazade.com$/,
        /quiveutdufromage.com$/,
        /scally.typepad.com$/,
        /zodio.fr$/,
        /unmondevegan.com$/,
        /recette-americaine.com$/,
        /la-cuisine-marocaine.com$/,
        /recetteshanane.com$/,
        /marciatack.fr$/,
        /pate-a-crepe.info$/,
        /cuistoshop.com$/,
        /cuisinezavecdjouza.fr$/,
        /unjourunerecette.fr$/,
        /geekandfood.fr$/,
        /dziriya.net$/,
        /kitchenaid.fr$/,
        /monbento.com$/,
        /bonappetit.com$/,
        /wikipedia.org$/,
        /imgur.com$/,
        /reddit.com$/,
        /skyrock.com$/,
        /wordpress.com$/,
        /fdj.fr$/,
        /pmu.fr$/,
        /betclic.fr$/,
        /bwin.fr$/,
        /freelotto.com$/,
        /winamax.fr$/,
        /secretsdujeu.com$/,
        /unibet.fr$/,
        /pronosoft.com$/,
        /freelotto.com$/,
        /doctissimo.fr$/,
        /medisite.fr$/,
        /psychologies.com$/,
        /magicmaman.com$/,
        /lassuranceretraite.fr$/,
        /passeportsante.net$/,
        /e-sante.fr$/,
        /allodocteurs.fr$/,
        /sante.fr$/,
        /letudiant.fr$/
    ],
        
    testAllRegexp : function(str, regexps) {
        for(var i in regexps) {
            if((regexps[i] instanceof RegExp) && regexps[i].test(str)) {
                return true;
            }
        }
        return false;
    },
    
    astroSuperCatcherRegexps: [
        /^http:\/\/astro\.rtl\.fr\//,
        /^http:\/\/astrologie-autrement\.com\//,
        /^http:\/\/astrologie\.leparisien\.fr\/astrologie\/index\.html/,
        /^http:\/\/astroreves\.net\//,
        /^http:\/\/dico\.reves\.free\.fr\//,
        /^http:\/\/dormirajamais\.org\/malatesta\//,
        /^http:\/\/femme\.planet\.fr\/couple-couple-la-difference-dage-est-elle-un-probleme\.19662\.1190\.html/,
        /^http:\/\/florianevoyance\.com\//,
        /^http:\/\/forum\.ados\.fr\/love\/Amour\/probleme-amour-sujet_28350_1\.htm/,
        /^http:\/\/forum\.aufeminin\.com\/forum\/ados3\/__f197_ados3-Probleme-d-amour\.html/,
        /^http:\/\/forum\.aufeminin\.com\/forum\/f718\/__f4261_f718-Envoutement\.html/,
        /^http:\/\/forum\.doctissimo\.fr\/famille\/forum-libre-famille\/probleme-routine-installe-sujet_202_1\.htm/,
        /^http:\/\/forum\.doctissimo\.fr\/psychologie\/amour\/probleme-amoureux-sujet_195456_1\.htm/,
        /^http:\/\/forum\.infobebes\.com\/Vie-de-couple-famille\/Mon-couple-sexualite\/probleme-arrivee-besoin-sujet_226771_1\.htm/,
        /^http:\/\/forum\.magicmaman\.com\/votrevie\/Viedecouple\/probleme-partir-couple-sujet-3665623-1\.htm/,
        /^http:\/\/forum\.momes\.net\/momes\/le-coin-des-filles\/hellp-probleme-amour-sujet_31990_1\.htm/,
        /^http:\/\/interpretation-reve\.fr\//,
        /^http:\/\/interpretation-reves\.lemuslim\.com\//,
        /^http:\/\/isps-lesite\.e-monsite\.com\//,
        /^http:\/\/le-blog-du-paranormal\.eklablog\.com\//,
        /^http:\/\/leplus\.nouvelobs\.com\/contribution\/555649-le-partage-des-taches-dans-le-couple-j-ai-resolu-le-probleme-en-faisant-greve\.html/,
        /^http:\/\/marie-marcy\.pagesperso-orange\.fr\//,
        /^http:\/\/mediologie\.org\//,
        /^http:\/\/mystere-paranormal-surnaturel\.over-blog\.com\//,
        /^http:\/\/ns236268\.ovh\.net\/~formatio\/index\.php/,
        /^http:\/\/paranormal\.blogspirit\.com\//,
        /^http:\/\/pierreastro\.free\.fr\//,
        /^http:\/\/pourvotrecouple\.com\//,
        /^http:\/\/rip-paranormal\.com\//,
        /^http:\/\/sante-medecine\.commentcamarche\.net\/forum\/affich-218794-probleme-de-libido-dans-mon-couple/,
        /^http:\/\/sante-medecine\.commentcamarche\.net\/forum\/affich-476020-probleme-d-adolescents-l-amour/,
        /^http:\/\/sante\.journaldesfemmes\.com\/psychologie\/couple\//,
        /^http:\/\/signification-reve\.fr\//,
        /^http:\/\/sosparanormal\.free\.fr\//,
        /^http:\/\/sunvoyance\.com\//,
        /^http:\/\/tobienathan\.wordpress\.com\/litteratures\/%E2%80%A2-la-nouvelle-interpretation-des-reves\//,
        /^http:\/\/toutlesurnaturel\.skyrock\.com\//,
        /^http:\/\/tristan\.moir\.free\.fr\//,
        /^http:\/\/voyance-serieuse-gratuite\.com\//,
        /^http:\/\/voyance\.avigora\.fr\//,
        /^http:\/\/voyant-medium-lamine\.com\//,
        /^http:\/\/voyant\.aconsulter\.com\//,
        /^http:\/\/www\.01net\.com\/telecharger\/windows\/Loisirs\/astrologie_et_voyance\//,
        /^http:\/\/www\.123-tarot\.com\//,
        /^http:\/\/www\.abcvoyance\.com\//,
        /^http:\/\/www\.akali-astro\.com\//,
        /^http:\/\/www\.alhodhod\.com\//,
        /^http:\/\/www\.allokang\.com\//,
        /^http:\/\/www\.allomedium\.com\//,
        /^http:\/\/www\.alsace-paranormal-investigation\.fr\//,
        /^http:\/\/www\.amelie-de-lys-voyance\.com\//,
        /^http:\/\/www\.aminesorcier\.com\//,
        /^http:\/\/www\.anne-medium\.fr\//,
        /^http:\/\/www\.anoustous\.com\/crises\//,
        /^http:\/\/www\.anoustous\.com\/probleme-de-couple/,
        /^http:\/\/www\.appaparanormal\.org\//,
        /^http:\/\/www\.astresnet\.org\//,
        /^http:\/\/www\.astro\.com\//,
        /^http:\/\/www\.astro\.qc\.ca\//,
        /^http:\/\/www\.astrocenter\.fr\/tarot/,
        /^http:\/\/www\.astrologie-analytique\.com\//,
        /^http:\/\/www\.astrologie-evolution\.com\//,
        /^http:\/\/www\.astrologie-humaniste-appliquee\.fr\//,
        /^http:\/\/www\.astrologie-libre\.org\//,
        /^http:\/\/www\.astrologie-tarologie\.fr\//,
        /^http:\/\/www\.astrologue\.org\//,
        /^http:\/\/www\.astroo\.com\//,
        /^http:\/\/www\.astrotheme\.fr\//,
        /^http:\/\/www\.aufeminin\.com\/astro/,
        /^http:\/\/www\.aufeminin\.com\/carriere\/dicoreves\/dicoreves1__le-dictionnaire-des-reves\.html/,
        /^http:\/\/www\.aufeminin\.com\/relations\/amour-som224\.html/,
        /^http:\/\/www\.aufeminin\.com\/top-tarot-gratuit\.html/,
        /^http:\/\/www\.autourdelalune\.com\//,
        /^http:\/\/www\.blog-secretdamour\.com\/resoudre-problemes-de-couple\//,
        /^http:\/\/www\.bonheur-couple\.fr\/couple1\.php/,
        /^http:\/\/www\.charlatans\.info\/astrologie\.shtml/,
        /^http:\/\/www\.chinastral\.com\//,
        /^http:\/\/www\.chine-nouvelle\.com\/astrologie/,
        /^http:\/\/www\.chris-de-bergue\.com\//,
        /^http:\/\/www\.christophervoyance\.com\//,
        /^http:\/\/www\.clemy-voyance\.com\//,
        /^http:\/\/www\.coaching-pour-reussir\.com\//,
        /^http:\/\/www\.conseils-solutions-couple\.fr\/comment_resoudre_probleme_couple\/comment_resoudre_probleme_couple\.html/,
        /^http:\/\/www\.contre-envoutement\.net\//,
        /^http:\/\/www\.cosmopolitan\.fr\/astro\/tarots\//,
        /^http:\/\/www\.coursastrologiebordeaux\.fr\//,
        /^http:\/\/www\.destiflash\.com\//,
        /^http:\/\/www\.dictionnaire-interpretation-reves\.com\//,
        /^http:\/\/www\.dictionnaire-reve\.com\//,
        /^http:\/\/www\.directmatin\.fr\/paranormal/,
        /^http:\/\/www\.divination\.ws\//,
        /^http:\/\/www\.divitarot\.com\/fr\//,
        /^http:\/\/www\.doctissimo\.fr\/html\/psychologie/,
        /^http:\/\/www\.dondevoyance\.com\//,
        /^http:\/\/www\.dorothee-medium\.fr\//,
        /^http:\/\/www\.e-sante\.fr\/relations-dans-couple/,
        /^http:\/\/www\.edarling\.fr\/conseils-rencontres\/relation\/problemes-de-couple/,
        /^http:\/\/www\.egostracisme\.com\//,
        /^http:\/\/www\.elle\.fr\/Astrologie/,
        /^http:\/\/www\.ensorcellement\.fr\//,
        /^http:\/\/www\.envoutement\.com\//,
        /^http:\/\/www\.esoterique\.biz\/ecom\/protection-desenvoutement-c-213\.html/,
        /^http:\/\/www\.euroavenir\.com\//,
        /^http:\/\/www\.exorcisme-desenvoutement\.fr\//,
        /^http:\/\/www\.extranaturel\.com\//,
        /^http:\/\/www\.fabien-tarologue\.com\//,
        /^http:\/\/www\.firdaous\.com\/0064-interpretation-des-reves-en-islam\.htm/,
        /^http:\/\/www\.florencehubert\.com\//,
        /^http:\/\/www\.formation-astrologie\.com\//,
        /^http:\/\/www\.hecate\.fr\//,
        /^http:\/\/www\.histoires-paranormales\.fr\//,
        /^http:\/\/www\.horoscope\.fr\/astrologie\//,
        /^http:\/\/www\.idealvoyance\.fr\//,
        /^http:\/\/www\.infos-paranormal\.net\//,
        /^http:\/\/www\.interpretationdesreves\.com/,
        /^http:\/\/www\.isabella\.fr\//,
        /^http:\/\/www\.jean-didier\.com\//,
        /^http:\/\/www\.jerecuperemonex\.com\/sauver-mon-couple\/conseils-pour-resoudre-problemes-de-couple\//,
        /^http:\/\/www\.joanavoyance\.fr\//,
        /^http:\/\/www\.katleen-voyance\.com\//,
        /^http:\/\/www\.les-meilleurs-voyants\.fr\//,
        /^http:\/\/www\.lesjeudisduparanormal\.fr\//,
        /^http:\/\/www\.lespasseurs\.com\//,
        /^http:\/\/www\.lexpress\.fr\/styles\/astrologie\//,
        /^http:\/\/www\.lexpress\.fr\/styles\/psycho\/couple-tout-sur-la-vie-et-les-problemes-de-couple_1320967\.html/,
        /^http:\/\/www\.lexpress\.fr\/styles\/psycho\/interpretation-des-reves-qui-veut-la-peau-de-freud_1563265\.html/,
        /^http:\/\/www\.love-consulting\.fr\/evaluation\//,
        /^http:\/\/www\.macha-la-dame-de-coeur\.fr\//,
        /^http:\/\/www\.magastral\.com\//,
        /^http:\/\/www\.magealexandre\.com\//,
        /^http:\/\/www\.maisonhantee\.net\//,
        /^http:\/\/www\.marieclaire\.fr\/astro\//,
        /^http:\/\/www\.marieclaire\.fr\/static\/astro\/tarots\/tarot\.php/,
        /^http:\/\/www\.maxi-mag\.fr\/astro\/tarot/,
        /^http:\/\/www\.maxi-mag\.fr\/psycho-sexo/,
        /^http:\/\/www\.mediumline\.fr\//,
        /^http:\/\/www\.mediumpure-voyanceline\.com\//,
        /^http:\/\/www\.mirina-voyance\.com\//,
        /^http:\/\/www\.mon-couple-heureux\.com\/couple-problemes\//,
        /^http:\/\/www\.mon-horoscope-du-jour\.com\//,
        /^http:\/\/www\.muriellerobert\.com\/tarot\.htm/,
        /^http:\/\/www\.myastro\.fr\//,
        /^http:\/\/www\.mystere-tv\.com\//,
        /^http:\/\/www\.onsexprime\.fr\//,
        /^http:\/\/www\.oracles\.ch\//,
        /^http:\/\/www\.over-blog\.com\/com-1136655681\/Probleme_de_couple\.html/,
        /^http:\/\/www\.papotonsensemble\.com\/p\/interpretation-des-reves-en-islam\.html/,
        /^http:\/\/www\.paranormal-encyclopedie\.com\//,
        /^http:\/\/www\.paranormal-fr\.net\//,
        /^http:\/\/www\.paranormal-info\.fr\//,
        /^http:\/\/www\.paraworld\.free\.fr\//,
        /^http:\/\/www\.plateformevoyance\.com\//,
        /^http:\/\/www\.plurielles\.fr\/horoscope\/tarot\//,
        /^http:\/\/www\.probleme-amour-eux\.fr\/go\/index\.html/,
        /^http:\/\/www\.psy-online\.tv\/probleme-couples\//,
        /^http:\/\/www\.psychologies\.com\/Couple\/Problemes-sexuels/,
        /^http:\/\/www\.psychologies\.com\/Therapies\/Psychanalyse\/Reves/,
        /^http:\/\/www\.purevoyance-voyanceserieuse\.com\//,
        /^http:\/\/www\.reve-interprete\.com\//,
        /^http:\/\/www\.revivremieux\.com\//,
        /^http:\/\/www\.saint-antoine-de-padoue\.com\//,
        /^http:\/\/www\.science-et-magie\.com\//,
        /^http:\/\/www\.signeastrologique\.ca\//,
        /^http:\/\/www\.signification-reve\.com\//,
        /^http:\/\/www\.signification-reves\.fr\//,
        /^http:\/\/www\.significationreve\.com\//,
        /^http:\/\/www\.sorcellerie-et-magie\.com\//,
        /^http:\/\/www\.specialiste-du-couple\.fr\//,
        /^http:\/\/www\.spiritual-magie\.fr\//,
        /^http:\/\/www\.sylvie-tribut-astrologue\.com\//,
        /^http:\/\/www\.temporel-voyance\.com\//,
        /^http:\/\/www\.terrafemina\.com\/vie-privee\/sexo\/articles\/27761-top-10-des-petits-problemes-de-couple-qui-gachent-une-relation\.html/,
        /^http:\/\/www\.tirage-de-tarot\.fr\//,
        /^http:\/\/www\.tiragecarte\.fr\/tarot-divinatoire\//,
        /^http:\/\/www\.topsante\.com\/couple-et-sexualite\/amour-et-couple\/problemes-couple/,
        /^http:\/\/www\.tripper-tips\.com\/forum-voyance-gratuite-resoud-tout-probleme-de-couple-dargent-et-autre-messages-4362-l\.html/,
        /^http:\/\/www\.veritevoyance\.com\//,
        /^http:\/\/www\.viversum\.fr\//,
        /^http:\/\/www\.voirpoursavoir\.fr\//,
        /^http:\/\/www\.vos-reves\.com\//,
        /^http:\/\/www\.voyance-marie-ange\.com\//,
        /^http:\/\/www\.voyance-telephone-enligne\.fr\//,
        /^http:\/\/www\.voyanceenligne\.fr\//,
        /^http:\/\/www\.voyancemarguerite\.com\//,
        /^http:\/\/www\.voyancemonamour\.fr\/tirage-de-cartes-gratuit\//,
        /^http:\/\/www\.voyancemonamour\.fr\/tirage-de-cartes-gratuit\//,
        /^http:\/\/www\.voyancewebcam\.com\//,
        /^http:\/\/www\.voyantissime\.com\//,
        /^https:\/\/fr\.astrology\.yahoo\.com\//,
        /^https:\/\/sites\.google\.com\/site\/astrologie06\//,
        /^http:\/\/voyance-autrement\.com\//,
        /^http:\/\/www\.astrowi\.com\/voyance-gratuite/,
        /^http:\/\/www\.corinne-voyance\.com/,
        /^http:\/\/www\.divinologue\.com/,
        /^http:\/\/www\.florarnaud-medium\.com/,
        /^http:\/\/www\.guidedelavoyance\.com/,
        /^http:\/\/www\.idealvoyance\.fr/,
        /^http:\/\/www\.irmavoyance\.fr/,
        /^http:\/\/www\.iza-voyance\.com/,
        /^http:\/\/www\.machainevoyance\.tv/,
        /^http:\/\/www\.magie-voyance\.com\//,
        /^http:\/\/www\.mediumpure-voyanceline\.com/,
        /^http:\/\/www\.mediumysteria\.com/,
        /^http:\/\/www\.nostradamusvoyance\.com\/votre-voyance\.html/,
        /^http:\/\/www\.purevoyance-voyanceserieuse\.com/,
        /^http:\/\/www\.sylvaine\.fr/,
        /^http:\/\/www\.temporel-voyance\.com/,
        /^http:\/\/www\.vivastreet\.com\/Annonce-voyance\?/,
        /^http:\/\/www\.viversum\.fr\/consultation\/voyance/,
        /^http:\/\/www\.voyance-web\.fr/,
        /^http:\/\/www\.voyance\.avigora\.fr/,
        /^http:\/\/www\.voyancealice\.com/,
        /^http:\/\/www\.voyancehealth\.com/,
        /^http:\/\/www\.voyantissime\.com\//,
        /^http:\/\/www\.voyantsako\.com/
    ],

    schoolBannerRegexps: [
        /^http:\/\/www\.completude\.com/,
        /^http:\/\/www\.methodia\.fr\/cours-particuliers-domicile\.html/,
        /^http:\/\/www\.cours-legendre\.fr/,
        /^http:\/\/soutien67\.free\.fr\//,
        /^http:\/\/www\.acadomia\.fr/,
        /^http:\/\/www\.lesprecepteurs\.fr\//,
        /^http:\/\/www\.anacours\.com\//,
        /^http:\/\/www\.solution-cours\.fr/,
        /^http:\/\/www\.lebon-prof\.com/,
        /^http:\/\/www\.lesbonsprofs\.com\/nos-offres/,
        /^http:\/\/www\.trouveunprof\.com/,
        /^http:\/\/www\.laureat\.fr/,
        /^http:\/\/www\.formaleo\.com\/soutien-scolaire\.html/,
        /^http:\/\/www\.completude\.com/,
        /^http:\/\/www\.domicours\.fr\//,
        /^http:\/\/www\.assistancescolaire\.com\//,
        /^http:\/\/www\.acsan-cours\.com\//,
        /^http:\/\/www\.educia\.fr\//,
        /^http:\/\/www\.admicours\.fr\//,
        /^http:\/\/www\.anglaisfacile\.com\//,
        /^http:\/\/www\.cmath\.fr\//,
        /^http:\/\/www\.superprof\.fr\//,
        /^http:\/\/www\.kelprof\.com\//,
        /^http:\/\/www\.letudiant\.fr\/soutien-scolaire\.html/,
        /^http:\/\/www\.cyberpapy\.com\//,
        /^http:\/\/www\.bordas\.com/,
        /^http:\/\/www\.acsan-cours\.com/,
        /^http:\/\/www\.admicours\.fr\//,
        /^http:\/\/www\.studycours\.fr/,
        /^http:\/\/www\.maxicours\.com\//,
        /^http:\/\/www\.educastream\.com\//,
        /^http:\/\/www\.vivacours\.fr\//,
        /^http:\/\/www\.matelem\.fr\//,
        /^http:\/\/soutien-scolaire\.comprendrechoisir\.com\//,
        /^http:\/\/www\.assistancescolaire\.com\//,
        /^http:\/\/keepschool\.com\//,
        /^http:\/\/www\.soutien-scolaire-plus\.net\//,
        /^http:\/\/www\.soutien-scolaire-gratuit\.com\//,
        /^http:\/\/www\.family-sphere\.com\/soutien-scolaire-1\.html/,
        /^http:\/\/www\.entraidescolaireamicale\.org/,
        /^http:\/\/www\.intellego\.fr\/soutien-scolaire\//,
        /^http:\/\/www\.binome-centre\.fr\//,
        /^http:\/\/www\.magicmaman\.com\/,soutien-scolaire-pour-qui-comment,3497,1230143\.asp/,
        /^http:\/\/www\.magicmaman\.com\/ecole/,
        /^http:\/\/www\.seniorsavotreservice\.com\/soutien-scolaire-cours-particuliers-aide-devoirs-senior-retraites\.htm/,
        /^http:\/\/www\.escuela\.fr/,
        /^http:\/\/www\.cned\.fr/,
        /^http:\/\/www\.soutiens-scolaires\.info\//,
        /^http:\/\/www\.teteamodeler\.com\/soutienscolaire/,
        /^http:\/\/www\.jemepropose\.com\/annonces\/soutien-scolaire/,
        /^http:\/\/www\.cyberexo\.fr\//,
        /^http:\/\/www\.club-soutien-scolaire\.com\//
    ],

    quotationBannerRegexps: [
        /^http:\/\/www\.quotatis\.fr\/travaux-entreprise\.html/,
        /^http:\/\/www2\.marchesprives\.com/,
        /^http:\/\/www\.easy-devis\.fr/,
        /^http:\/\/www\.trouverunartisan\.fr\/site\/post_a_job/,
        /^http:\/\/leboncoindevis\.com\/devistravaux/,
        /^http:\/\/www\.travaux\.com\/devis/,
        /^http:\/\/devis-pour-artisans\.fr/,
        /^http:\/\/www\.batitel\.com\/logiciel/,
        /^http:\/\/www\.sos-devis\.fr/,
        /^http:\/\/www\.enchantier\.com/,
        /^http:\/\/www2\.marchesprives\.com/,
        /^http:\/\/www\.quotatis\.fr\/travaux-entreprise\.html/,
        /^http:\/\/www\.easy-devis\.fr/,
        /^http:\/\/www\.devispresto\.com/,
        /^http:\/\/www\.devis-plus\.com/,
        /^http:\/\/www\.devis1min\.fr/,
        /^http:\/\/www\.e-travaux\.com/,
        /^http:\/\/www\.12travaux\.fr/,
        /^http:\/\/www\.lexpertfenetre\.fr\/fenetres\/devis-fenetre\.html/,
        /^http:\/\/www\.devispro\.com/,
        /^http:\/\/www\.home-devis\.fr/,
        /^http:\/\/www\.123devis\.com/,
        /^http:\/\/www\.kpark\.fr\/landing-pages\/demande-de-devis/,
        /^http:\/\/www\.belm\.fr\/devis/,
        /^http:\/\/www\.fenetres-alu-pvc\.com\/fenetres\/alu-pvc\.htm/,
        /^http:\/\/www\.vie-veranda\.com/,
        /^http:\/\/www\.eco-veranda\.com\/contact12\/index\.htm/,
        /^http:\/\/www\.akenaverandas\.com/,
        /^http:\/\/www\.conceptalu\.com/,
        /^http:\/\/forum\.aufeminin\.com\/forum\/loisirs10\/__f6163_loisirs10-Cout-moyen-pour-une-veranda-de-15m\.html/,
        /^http:\/\/www\.maisonpro24\.fr\/veranda-pergola-verriere/,
        /^http:\/\/www\.renoval-veranda\.com/,
        /^http:\/\/www\.verandarideau\.com\/verandas\/demande-de-devis/,
        /^http:\/\/veranda\.comprendrechoisir\.com/,
        /^http:\/\/www\.forumveranda\.fr/,
        /^http:\/\/www\.simpledevis\.fr/,
        /^http:\/\/www\.avisdetravaux\.fr/,
        /^http:\/\/www\.trouverplombier\.fr/,
        /^http:\/\/www\.avisdetravaux\.fr/,
        /^http:\/\/www\.easy-devis\.fr/,
        /^http:\/\/www\.idealdevis\.com/,
        /^http:\/\/www\.illico-travaux\.com/,
        /^http:\/\/www\.devis-travaux-en-ligne-ronchamp\.com/,
        /^http:\/\/www\.contactartisan\.com/,
        /^http:\/\/www\.enchantier\.com/,
        /^http:\/\/www\.desjoyaux\.fr\/piscines-desjoyaux/,
        /^http:\/\/www\.mondial-piscine\.eu\/constructeur-piscine\/devis/,
        /^http:\/\/www\.waterair\.fr\/prix-piscine-tarifs-catalogue\.html/,
        /^http:\/\/www\.simpledevis\.fr/,
        /^http:\/\/www\.diffazur\.fr\/imaginer\/votre-piscine\.html/,
        /^http:\/\/www\.piscines-provence-polyester\.com/,
        /^http:\/\/www\.piscines-plage-privee\.com/,
        /^http:\/\/www\.guide-piscine\.fr/,
        /^http:\/\/www\.alliancepiscines\.com\/nos-piscines\/devis-piscine\.html/,
        /^http:\/\/www\.cotemaison\.fr\/piscine-spa\/de-15-000-a-plus-de-50-000-euros-quel-prix-pour-une-piscine_6217\.html/,
        /^http:\/\/www\.votrepiscine\.fr\/prix/,
        /^http:\/\/piscine\.comprendrechoisir\.com\/comprendre\/prix-piscine/,
        /^http:\/\/www\.piscinesgroupega\.com/,
        /^http:\/\/www\.veranda-grandeurnature\.com\/nos-oeuvres\/pieces\/24\/abri-de-piscine\.html/,
        /^http:\/\/piscine\.comprendrechoisir\.com\/comprendre\/prix-piscine/,
        /^http:\/\/forum\.aufeminin\.com\/forum\/f781\/__f137_f781-Prix-d-une-piscine-pose-comprise\.html/,
        /^http:\/\/devispiscine\.info/,
        /^http:\/\/www\.irrijardin\.fr\/info\/devis-piscine/,
        /^http:\/\/www\.piscine-okeanos\.com/,
        /^http:\/\/www\.travaux\.com\/guide-des-prix\/piscine\/prix-de-la-pose-dune-piscine/,
        /^http:\/\/www\.decor-facades\.com/,
        /^http:\/\/devis\.contactartisan\.com\/devis-ravalement\/facade\.html/,
        /^http:\/\/www\.maisonentravaux\.fr\/couts-travaux\/couts-peinture\/prix-ravalement-de-facade-au-m2/,
        /^http:\/\/www\.forumconstruire\.com\/construire\/topic-188887\.php/,
        /^http:\/\/ravalement-de-facade\.comprendrechoisir\.com\/comprendre\/ravalement-de-facade-prix/,
        /^http:\/\/www\.renovationettravaux\.fr/,
        /^http:\/\/contactartisan\.com/,
        /^http:\/\/www\.maisonentravaux\.fr/,
        /^http:\/\/www\.comprendrechoisir\.com\/univers\/maison/,
        /^http:\/\/toiture\.comprendrechoisir\.com/,
        /^http:\/\/www\.toiture\.net/,
        /^http:\/\/www\.12travaux\.fr/,
        /^http:\/\/devis-toiture\.org/,
        /^http:\/\/forums\.futura-sciences\.com\/bricolage-decoration\/372165-avis-devis-toiture\.html/,
        /^http:\/\/toiture\.pro/,
        /^http:\/\/www\.forumconstruire\.com/,
        /^http:\/\/www\.mon-devis-toiture\.fr/,
        /^http:\/\/www\.avisdetravaux\.fr/,
        /^http:\/\/www\.terrealcouverture\.com/,
        /^http:\/\/www\.travaux\.com/,
        /^http:\/\/www\.contactartisan\.com/,
        /^http:\/\/www\.peinturedevis\.com/,
        /^http:\/\/www\.maisonentravaux\.fr/,
        /^http:\/\/devispeinture\.org/,
        /^http:\/\/deviscuisine\.co/,
        /^http:\/\/www\.devispeinturegratuit\.com/,
        /^http:\/\/www\.entreprisepeinturedeco\.fr\/devis-peintures\/devis-peinture/,
        /^http:\/\/www\.devisdepeinture\.org/,
        /^http:\/\/www\.electricien-appeloffre\.com/,
        /^http:\/\/ad\.electricite\.123devis\.com/,
        /^http:\/\/www\.guidelec\.com/,
        /^http:\/\/www\.contactartisan\.com/,
        /^http:\/\/deviselectricite\.org/,
        /^http:\/\/www\.ideesmaison\.com/,
        /^http:\/\/devis\.ideesmaison\.com/,
        /^http:\/\/www\.votre-electricien\.fr/,
        /^http:\/\/www\.devisrenovation\.com/,
        /^http:\/\/www\.renovationettravaux\.fr/,
        /^http:\/\/www\.becep\.fr/,
        /^http:\/\/www\.faire1devis\.fr/,
        /^http:\/\/leboncoindevis\.com/,
        /^http:\/\/www\.packtravaux\.com/,
        /^http:\/\/www\.travoo\.fr/,
        /^http:\/\/monhabitat-devis-travaux\.quotatis\.fr/,
        /^http:\/\/www\.quotatis\.fr/,
        /^http:\/\/www\.eco-artisan\.net\/renovation\/devis-et-assurances\.html/,
        /^http:\/\/www\.cotemaison\.fr\/devis-travaux-renovation/,
        /^http:\/\/www\.illico-travaux\.com/,
        /^http:\/\/www\.devis-renover\.com/,
        /^http:\/\/www\.eco-clim-reversible\.com/,
        /^http:\/\/www\.climatisation-chauffage-ventilation\.fr/,
        /^http:\/\/www\.devisclimatisationgratuit\.com/,
        /^http:\/\/www\.climatisationreversible\.net/,
        /^http:\/\/www\.devis-climatisation\.pro/,
        /^http:\/\/www\.climperfect\.com/,
        /^http:\/\/www\.domotelec\.fr/
    ],
   
    showSuperCatcher:function() {
        // manage pressure, is allready shown prevent other shows
        if(this.getCookie('supercatcher_pressure')) { 
           return false; 
        }
    
        //Track show event
        fdzPageBooster.boost_type = 'supercatchers';
        fdzPageBooster.trackEvent('show', fdzPageBooster.boost_type);
        window.catcher="10";
        window.idw="6352";
        window.txtColor="#fff";
        window.phoneColor="#000";
        window.phoneBackgroundColor="#fff";
        window.notelColor="#007928";
        window.datas=""; 
        script_to_include = jQueryFindizer('<script />', {type: "text/javascript", src:"http://banners.goracash.com/supercatchers/script.php"});
        var ad_block = jQueryFindizer('<div />');
        ad_block.css(reset_css);
        ad_block.css({
            position: 'fixed',
            bottom: '10px',
            right: '10px',
            background: '#fff',
            width: '300px',
            height: '300px',
            display: 'block'
        });
        ad_block.append(script_to_include);
        jQueryFindizer('head').append(ad_block);
        // listen to submit event
         jQueryFindizer(document).on('click', '.submit a.submit', function(e) {
            fdzPageBooster.click();
        });
        jQueryFindizer(document).on('click', '#closeButton', function(e) {
            fdzPageBooster.close();
        });
        
        //Remember show for pressure
        this.setCookie('supercatcher_pressure', '1');
    },

    showQuotationBanner:function() {
        // manage pressure, is allready shown prevent other shows
        if(this.getCookie('quotation_pressure')) { 
           return false; 
        }
    
        //Track show event
        fdzPageBooster.boost_type = 'quotationBanner';
        fdzPageBooster.trackEvent('show', fdzPageBooster.boost_type);
        //Display ad
        var width = 340;
        var height = 410;
        
       var ad_block_bg = jQueryFindizer('<div />');
        ad_block_bg.css({
            width: "100%",
            height: "100%",
            background: "rgba(0, 0, 0, 0.8)",
            position: 'fixed',
            top: '0px',
            left: "0px"
        });
        var ad_block = jQueryFindizer('<iframe />', {
                src: 'http://www.goracash.com/devis.php?market=fr&idw=6352&clf=F2F2F2&clt=333333&clb=30db30&trs=0&datas=',
                width:"340",
                height:"410",
                marginwidth:"0",
                marginheight:"0",
                scrolling:"no",
                frameborder:"0"
            }
        );
        ad_block.css({
            display: 'block',
            position: 'fixed',
            top: jQueryFindizer(window).height() / 2 - (height / 2) + 'px',
            left: jQueryFindizer(window).width() / 2 - (width / 2) + 'px'
        });
        var closer = jQueryFindizer('<span />', {id: "closeButton"});
        closer.css(reset_css);
        closer.css({
            position: 'absolute',
            top: '12px',
            right: '8px',
            fontWeight: 'bold',
            color: '#fff',
            fontSize: '30px',
            cursor:'pointer'
        });
        closer.html('&times;');
        ad_block_bg.append(closer);
        ad_block_bg.append(ad_block);
        jQueryFindizer('body').append(ad_block_bg);
        // listen to submit event
        jQueryFindizer(document).on('click', '#submit', function(e) {
            fdzPageBooster.click();
        });
        jQueryFindizer(document).on('click', '#closeButton', function(e) {
            fdzPageBooster.close();
            ad_block_bg.detach();
        });
        
        //Remember show for pressure
        this.setCookie('quotation_pressure', '1');
    },

    showSchoolTutoringBanner:function() {
        // manage pressure, is allready shown prevent other shows
        if(this.getCookie('school_pressure')) { 
           return false; 
        }
    
        //Track show event
        fdzPageBooster.boost_type = 'schoolTutoringBanner';
        fdzPageBooster.trackEvent('show', fdzPageBooster.boost_type);
        //Display ad
        var width = 480;
        var height = 680;
        var ad_block_bg = jQueryFindizer('<div />');
        ad_block_bg.css({
            width: "100%",
            height: "100%",
            background: "rgba(0, 0, 0, 0.8)",
            position: 'fixed',
            top: '0px',
            left: "0px"
        });
        var ad_block = jQueryFindizer('<iframe />', {
                src: 'http://www.goracash.com/enseignement.php?market=fr&idw=6352&clf=F2F2F2&clt=333333&clb=2B99AD&trs=0&datas="',
                width:"480",
                height:"680",
                marginwidth:"0",
                marginheight:"0",
                scrolling:"no",
                frameborder:"0"
            }
        );
        //ad_block.css(reset_css);
        ad_block.css({
            display: 'block',
            position: 'fixed',
            top: jQueryFindizer(window).height() / 2 - (height / 2) + 'px',
            left: jQueryFindizer(window).width() / 2 - (width / 2) + 'px'
        });
        var closer = jQueryFindizer('<span />', {id: "closeButton"});
        closer.css(reset_css);
        closer.css({
            position: 'absolute',
            top: '12px',
            right: '8px',
            fontWeight: 'bold',
            color: '#fff',
            fontSize: '30px',
            cursor:'pointer'
        });
        closer.html('&times;');
        ad_block_bg.append(closer);
        ad_block_bg.append(ad_block);
        jQueryFindizer('body').append(ad_block_bg);
        // listen to submit event
        jQueryFindizer(document).on('click', '.submit', function(e) {
            fdzPageBooster.click();
        });
        jQueryFindizer(document).on('click', '#closeButton', function(e) {
            fdzPageBooster.close();
            ad_block_bg.detach();
        });
        
        //Remember show for pressure
        this.setCookie('school_pressure', '1');
    },
    
    click: function() {
        this.trackEvent('click', fdzPageBooster.boost_type);
    },

    close: function() {
        this.trackEvent('close', fdzPageBooster.boost_type);
    },
    
    trackEvent: function(type, boost_type, callback) {
        console.log('track ' + type + ' event !['+this.app_code+']');
        //Send track event request
        var postData = {
            event: type,
            browser: bowser.name,
            url: document.URL,
            app_code: fdzPageBooster.app_code,
            plugin_key: fdzPageBooster.plugin_key,
            boost_type: boost_type,
            os: navigator.platform
        };
        if (fdzPageBooster.tracker_id == null && fdzPageBooster.hasCookie("t_id")) {
            fdzPageBooster.tracker_id = fdzPageBooster.getCookie("t_id");
        }

        if (fdzPageBooster.tracker_id != null) {
            postData['id_event'] = fdzPageBooster.tracker_id;
        }
        jQueryFindizer.getJSON(dynamicURL("http://www.findizer.fr/partners/track-boosters-event.php?callback=?"), postData, function(json) {
            if(json.success) {
                if (fdzPageBooster.tracker_id == null) {
                    fdzPageBooster.tracker_id = json.id['$id'];
                    fdzPageBooster.setCookie("t_id", json.id['$id']);
                }
            }
            //And call callback
            if(callback) {
                callback();
            }
        });
    },
    
    hasCookie: function (sKey) {
        return (new RegExp("(?:^|;\\s*)" + escape(sKey).replace(/[\-\.\+\*]/g, "\\$&") + "\\s*\\=")).test(document.cookie);
    },

    getCookie: function (cname) {
        var name = cname + "=";
        var ca = document.cookie.split(';');
        for(var i=0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0)==' ') c = c.substring(1);
            if (c.indexOf(name) != -1) return c.substring(name.length, c.length);
        }
        return "";
    },

    setCookie: function (cname, cvalue) {
        document.cookie = cname + "=" + cvalue + ";path=/;";
    }
}

// Start
if (window.jQueryFindizer === undefined) {
    var done = false;
    var script = document.createElement("script");
    script.src = dynamicURL("http://www.findizer.fr/partners/js/jquery-findizer.min.js");
    script.onload = script.onreadystatechange = function(){
        if (!done && (!this.readyState || this.readyState == "loaded" || this.readyState == "complete")) {
            done = true;
            fdzPageBooster.init();
        }
    };
    document.getElementsByTagName("head")[0].appendChild(script);
} else {
    fdzPageBooster.init();
}

