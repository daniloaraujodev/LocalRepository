package matematica;

import java.util.Scanner;

public class CalcOperacao {

	public static void main(String[] args) {
		Scanner dados = new Scanner (System.in);
		
		System.out.print("Digite o primeiro número: ");
		double num1 = dados.nextDouble();
		
		System.out.print("Digite o segundo número: ");
		double num2 = dados.nextDouble();
		
		System.out.print("\n\nEscolha uma das quatro Operações");
		System.out.print("\nDigite 1 para Adição");
		System.out.print("\nDigite 2 para Subtração");
		System.out.print("\nDigite 3 para Multiplicação");
		System.out.print("\nDigite 4 para Divisão\n");
		int operacao = dados.nextInt();
		dados.close();
		switch (operacao) {
	     case 1:
	       System.out.println("Você escolheu Adição");
	     	double somatorio = num1 + num2;
	     	System.out.println("A soma dos números digitados é: " + somatorio);
	       break;
	     case 2:
	       System.out.println("Você escolheu Subtração");
	       double subtrai = num1 - num2;
	       System.out.println("A subtração dos números digitados é: " + subtrai);
	       break;
	     case 3:
	       System.out.println("Você escolheu Multiplicação");
	       double multiplica = num1 * num2;
	       System.out.println("A multiplicação dos números digitados é: " + multiplica);
	       break;
	     case 4:
	       System.out.println("Você escolheu Divisão");
	       double divide = num1 / num2;
	       System.out.printf("A divisão dos números digitados é %.2f: " , divide);
	       break;
		
		}
	}
}