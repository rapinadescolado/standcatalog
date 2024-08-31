import requests

dados = {"nome": "Alice", "idade": 25}
response = requests.post("https://rapinadescolado.github.io/standcatalog/get", json=dados)
print(response.status_code)
print(response.json())