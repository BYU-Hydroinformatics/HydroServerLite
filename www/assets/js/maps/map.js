var map, vectorSource

const load = () => {
	vectorSource = new ol.source.Vector({})

	map = new ol.Map({
		target: 'map',
		layers: [
			new ol.layer.Vector({
				source: vectorSource
			}),
			new ol.layer.Tile({
				source: new ol.source.XYZ({
					url:
						'https://basemap.nationalmap.gov/arcgis/rest/services/USGSTopo/MapServer/tile/{z}/{y}/{x}'
				})
			})
		],
		view: new ol.View({
			center: ol.proj.fromLonLat([-111.649, 40.249]),
			zoom: 5
		})
	})

	loadMarkers()
}

const loadMarkers = () => {
	let searchUrl = `${base_url}sites/displayAll`

	//TODO : Probably need to start a loading indicator.

	$.ajax({
		url: searchUrl,
		cache: false,
		dataType: 'json'
	})
		.done(markersJSON => {
			if (markersJSON.marker) {
				let markers = markersJSON.marker

				// 				@attributes:
				// lat: "44.815"
				// lng: "-110.7316667"
				// name: "Beaver Lake Inlake E"
				// sitecode: "BLIE"
				// siteid: "11"
				// sitepic: ""
				// sitetype: ""
				// sourcecode: "2"
				// sourcelink: "http://www.byu.edu"
				// sourcename: "Dr. Millers Research "

				markers = markers.map(marker => {
					let { lat, lng, name } = marker['@attributes']

					let myLocation = new ol.geom.Point(
						ol.proj.fromLonLat([lng, lat])
					)

					return new ol.Feature({
						name,
						geometry: myLocation
					})
				})

				vectorSource.addFeatures(markers)

				map.getView().fit(vectorSource.getExtent(), map.getSize())
				map.updateSize()
			} else {
				console.log('No Markers found')
			}
		})
		.fail(err => {
			console.log(err)
		})
}
