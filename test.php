from flask import Flask, request, jsonify

app = Flask(__name__)

@app.route('/soma', methods=['POST'])
def soma():
    dados = request.get_json()  # Recebe os dados enviados pelo POST em formato JSON
    num1 = dados.get('num1')
    num2 = dados.get('num2')

    # Realiza a soma
    resultado = num1 + num2

    # Retorna o resultado como JSON
    return jsonify({"soma": resultado})

if __name__ == '__main__':
    app.run(debug=True)