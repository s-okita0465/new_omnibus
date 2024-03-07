/*
* wai.Gmap.js
*
* version
* - 0.2
*
* library
* - google map api ver.3
* - jQuery1.12.2
*
* funcs
* - clickList
* - addMap
*
*/

// -------------------
// Utilクラス
// -------------------
var Gmap = {

	// --------------------------
	// clickList
	// - リストと連動するポインター
	//
	// - 引数
	//	- m : マップボックスのID
	//	- d : マーカーの情報（JSON）
	//			※ var json_sample = [ {lat:35.4020394,lng:132.6832673,title:"出雲大社",html:"出雲大社<br>"},{....} ]
	//
	//	- b : ボタンに振られたクラス
	//			※クラスが振られた要素には data-point を付けること
	//			　data-point でそれがどのmarkerかを判別します
	//
	//	- t : マップのスタイル
	//			空 : デフォルト／gray : グレースケール
	//
	clickList: function(m,d,b,t){
		var map = null;
		var infowindow = new google.maps.InfoWindow();
		var gmarkers = [];
		var i = 0;
		var markerBounds = new google.maps.LatLngBounds();
		var map_type_id = 'gmap';

		function inicializar() {
			// 初期設定
			var option = {
				// ズームレベル
				zoom: 9,
				// 中心座標
				center: new google.maps.LatLng(35.4020394,132.6832673),
				// タイプ (ROADMAP・SATELLITE・TERRAIN・HYBRIDから選択)
				mapTypeControlOptions: {
					mapTypeIds: [google.maps.MapTypeId.ROADMAP, map_type_id]
				},
				// スクロールホイールを無効
				scrollwheel: false,
				mapTypeControl: false,
			};
			map = new google.maps.Map(document.getElementById(m), option);

			// マップのスタイル : カラーなど
			if(t != undefined && t == 'gray'){
				var stylez = [
					{
						featureType: "all",
						elementType: "all",
						stylers: [
							{ "saturation": -100 }
						]
					}
				];
				var mapType = new google.maps.StyledMapType(stylez, { name:"Grayscale" });
				map.mapTypes.set(map_type_id, mapType);
				map.setMapTypeId(map_type_id);
			}


			google.maps.event.addListener(map, "click", function() {infowindow.close();});


			for(var j=-1,n=d.length;++j<n;){
				var point = new google.maps.LatLng(d[j].lat,d[j].lng);
				var marker = create_maker(point, d[j].title, d[j].html);
			}

			map.fitBounds(markerBounds);
		}

		function create_maker(latlng, label, html) {
			markerBounds.extend(latlng);
			// マーカーを生成
			var marker = new google.maps.Marker({position: latlng, map: map, title: label});
			// マーカーをクリックした時の処理
			google.maps.event.addListener(marker, "click", function() {
				infowindow.setContent(html);
				infowindow.open(map, marker);
				map.panTo(latlng);
			});
			gmarkers[i] = marker;
			i++;
			return marker;
		}

		$(b).on('click',function(e){
			e.preventDefault();
			var num = $(this).data('point');
			google.maps.event.trigger(gmarkers[num], "click");
		});

		inicializar();
	},

	// --------------------------
	// addMap
	// - マップ生成
	//
	// - 引数
	//	- m : マップボックスのID
	//	- d : マーカーの位置情報
	//（配列 {lat:35, lng:135, address:'大阪',zoom:17,icon:{url:'画像URL',width:0, height:0}}）
	//	- t : マップのタイプ normal :デフォルト / gray : グレーマップ
	//
	addMap:function(m,d,t){
		var latlng;
		var zoom = 17;
		var self = this;
		var icon = '';

		if(d.zoom != undefined){
			zoom = d.zoom;
		}
		if(d.icon != undefined){
			icon = d.icon;
		}

		if(d.lat != undefined && d.lng != undefined){
			latlng = new google.maps.LatLng(d.lat,d.lng);
			if(latlng){
				self.addMapFunc(m,latlng,zoom,t,icon);
			}
		} else {
			if(d.address != undefined){
				var geocoder = new google.maps.Geocoder();
				geocoder.geocode({
						'address':d.address
					},
					function(results, status){
						if (status == google.maps.GeocoderStatus.OK) {
							latlng = results[0].geometry.location;
							self.addMapFunc(m,latlng,zoom,t,icon);
						}
					}
				);
			}
		}
	},
	addMapFunc: function(m,l,z,t,i){
		var myOptions = {
			zoom: z,
			center: l,
			mapTypeControlOptions: {
				mapTypeIds: [google.maps.MapTypeId.ROADMAP,m+'_map']
			},
			scrollwheel: false,
			mapTypeControl: false,
		};

		var map = new google.maps.Map(document.getElementById(m), myOptions);

		if(t != 'undefined' && t == 'gray') {
			var stylez = [
			{
					featureType: "all",
					elementType: "all",
					stylers: [
						{ "saturation": -100 }
					]
				}
			];

			var mapType = new google.maps.StyledMapType(stylez, { name:"Grayscale" });
			map.mapTypes.set(m+'_map', mapType);
			map.setMapTypeId(m+'_map');
		}

		var markerOptions = {
			position: l,
			map: map,
			title: ''
		};
		var icon_info = {};
		if(i != undefined){
			icon_info['url'] = i.url;
			if(i.width != undefined && i.height != undefined){
				icon_info['scaledSize'] = new google.maps.Size(i.width, i.height);
			}
			markerOptions['icon'] = icon_info;
		}

		var marker = new google.maps.Marker(markerOptions);
	},
}
