/* Enunciado: Crea una clase llamada CuentaBancaria que implemente encapsulación
usando propiedades privadas con las siguientes características:
 Una propiedad privada #saldo que almacene el saldo de la cuenta.
 Un constructor que reciba nombreTitular y saldoInicial como parámetros.
Inicializa nombreTitular como una propiedad pública y #saldo como una
propiedad privada.
 Un método público obtenerSaldo() que retorne el saldo actual.
 Un método público depositar(monto) que permita agregar fondos a la cuenta
solo si el monto es mayor a 0. Debe imprimir un mensaje con el nuevo saldo.
 Un método público retirar(monto) que permita retirar fondos si hay saldo
suficiente. Debe imprimir un mensaje con el nuevo saldo o indicar si no hay
fondos suficientes.
Tarea:
1. Crea un objeto CuentaBancaria con nombre del titular "Juan" y un saldo inicial
de 1000 EUR.
2. Llama al método obtenerSaldo(), luego realiza un depósito de 500 EUR y retira
200 EUR.
3. Verifica que no sea posible acceder directamente a la propiedad #saldo desde
fuera de la clase.*/ 
"use strict"
class CuentaBancaria {
    #saldo;

    constructor(nombreTitular, saldoInicial) {
        this.nombreTitular = nombreTitular;
        this.#saldo = saldoInicial;
    }

    obtenerSaldo() {
        return this.#saldo;
    }

    depositar(monto) {
        if (monto > 0) {
            this.#saldo += monto;
            console.log(`Nuevo saldo: ${this.#saldo} €`);
        } else {
            console.log("El monto debe ser mayor a 0.");
        }
    }

    retirar(monto) {
        if (monto <= this.#saldo) {
            this.#saldo -= monto;
            console.log(`Nuevo saldo: ${this.#saldo} €`);
        } else {
            console.log("Fondos insuficientes.");
        }
    }
}

let cuenta = new CuentaBancaria("Juan", -700);
console.log(cuenta.obtenerSaldo()); 
cuenta.depositar(500); 
cuenta.retirar(200); 
