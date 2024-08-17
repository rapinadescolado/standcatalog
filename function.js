const params = new URLSearchParams(window.location.search);

var json = {
'omaga': 'kkkkk',
'bruh': ['bruh1','bruh2']
}

var numero = params.get('teste');

if(numero==1){
   json.omaga = 10
}