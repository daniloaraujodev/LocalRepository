package matematica;

import java.util.Scanner;

public class CadastroUser {


	public static void main(String[] args) {
		Scanner dados = new Scanner (System.in); 
			System.out.print("Digite seu nome: ");
			String nome = dados.nextLine();
			
			System.out.print("Digite sua profissão: ");
			String profissao = dados.nextLine();
			
			System.out.print("Digite sua idade: ");
			String idade = dados.nextLine();
			
			System.out.print("Digite a cidade onde você mora: ");
			String cidade = dados.nextLine();
			
			System.out.println( nome + " é " + profissao + ", tem " + idade + " anos" + " e mora na cidade de " + cidade);
			dados.close();
		}

	}
