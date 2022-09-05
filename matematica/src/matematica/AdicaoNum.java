package matematica;

import java.util.Scanner;

public class AdicaoNum {

		public static void main(String[] args) {
				Scanner dados = new Scanner (System.in);
				System.out.print("Digite o primeiro numero: ");
				int num1 = dados.nextInt();
				
				System.out.print("Digite o segundo numero: ");
				int num2 = dados.nextInt();
				
				System.out.print("Digite o terceiro numero: ");
				int num3 = dados.nextInt();
				
				System.out.print("Digite o quarto numero: ");
				int num4 = dados.nextInt();
				
				System.out.printf("Você digitou os numeros: " + num1 + " " + num2 + " " + num3 + " " + num4);
				int result = num1 + num2 + num3 + num4;
				System.out.printf("\nA soma destes numeros é: " + result);
				dados.close();
		}
}