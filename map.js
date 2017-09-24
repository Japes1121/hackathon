var bombs = new Backbone.Collection([
  {
    name: 'India',
    averageVictims: 1060719,
    cancerVictims: '78975',
    diabetesVictims: '980764',
	cvdVictims: '980',
    fillKey: 'IND',
    latitude: 35.861660,
    longitude: 104.195397
  },{
    name: 'Russia',
    averageVictims: 11697,
    cancerVictims: '1800',
	diabetesVictims: '9807',
	cvdVictims: '90',
    fillKey: 'RUS',
    latitude: 61.5240,
    longitude: 105.3188
  },{
    name: 'Mauritius',
    averageVictims: 18739,
    cancerVictims: '987',
	diabetesVictims: '8776',
	cvdVictims: '8976',
    fillKey: 'MAU',
    latitude: 20.3484,
    longitude: 57.5522
  },{
    name: 'Mexico',
    averageVictims: 7156,
    cancerVictims: '876',
	diabetesVictims: '2780',
	cvdVictims: '3500',
    fillKey: 'MEX',
    latitude: 23.634501,
    longitude: -102.552784
  },{
    name: 'Brazil',
    averageVictims: 12488,
    cancerVictims: '1289',
	diabetesVictims: '8712',
	cvdVictims: '2487',
    fillKey: 'BRA',
    latitude: -14.235004,
    longitude: -51.925280
  },{
    name: 'Japan',
    averageVictims: 1584,
    cancerVictims: '432',
	diabetesVictims: '524',
	cvdVictims: '628',
    fillKey: 'JPN',
    latitude: 36.204824,
    longitude: 138.252924
  },{
    name: 'Greenland',
    averageVictims: 1688,
    cancerVictims: '148',
	diabetesVictims: '862',
	cvdVictims: '678',
    fillKey: 'GRL',
    latitude: 71.706936,
    longitude: -42.604303
  },{
    name: 'Australia',
    averageVictims: 11442,
    cancerVictims: '1893',
	diabetesVictims: '8764',
	cvdVictims: '785',
    fillKey: 'AUS',
    latitude: -25.274398,
    longitude: 133.775136
  }
]);

    //prep the data
    var yields = bombs.pluck('averageVictims');

    var min = d3.min( yields );
    var max = d3.max( yields );

    var scale = d3.scale.pow()
        .domain([min, max])
        .range([10, 20]);

    bombs.each(function(val, idx) {
        bombs.at(idx).set('radius', scale(val.get('averageVictims')));
    });

   $("#container1").datamap({
        scope: 'world',
        bubbles: bombs.toJSON(),
        bubble_config: {
            popupTemplate: _.template([
                '<div class="hoverinfo"><strong><%= data.name %></strong>',
                '<br/>Cancer Victims: <%= data.cancerVictims %> / Year',
                '<br/>CardioVascular Diseases: <%= data.cvdVictims %> / Year',
                '<br/>Diabetes: <%= data.diabetesVictims %> / Year',
				'<br/>Total Victims: <%= data.averageVictims %> / Year',
                '</div>'].join(''))
        },
        geography_config: {
            popupOnHover: false,
            highlightOnHover: false
        },
        fills: {
            'IND': '#1f77b4',
            'RUS': '#9467bd',
            'MAU': '#4F1FAA',
            'MEX': '#2ca02c',
            'BRA': '#8c564b',
            'JPN': '#d62728',
            'AUS': '#7f7f7f',
			'GRL': '#1FAA91',
            defaultFill: '#EDDC4E'
        },
        data: {
            'RUS': {fillKey: 'RUS'},
            'MAU': {fillKey: 'MAU'},
            'MEX': {fillKey: 'MEX'},
            'IND': {fillKey: 'IND'},
            'BRA': {fillKey: 'BRA'},
            'JPN': {fillKey: 'JPN'},
            'AUS': {fillKey: 'AUS'},
			'GRL': {fillKey: 'GRL'},
        }
    });