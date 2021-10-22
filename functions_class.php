<?php
class functions
{

    public static function verificarGrupo($grupo)
    {
        $grupos = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I'];
        //PARA CADA GRUPO 
        foreach ($grupos as $g) {
            //VERIFICA SE CADA GRUPO DE ARRAY DE CONTÉM NÚMERO REPETIDO
            //E RETORNA UM NOVO ARRAY EXCLUINDO OS NÚMEROS REPETIDOS
            //ENTÃO SE NÃO HÁ NÚMEROS REPETIDOS A CONTAGEM VAI RETORNAR 9
            //PARA CADA GRUPO
            $result[$g] = count(array_unique($grupo[$g]));
        }
        //VERIFICA SE HÁ REPETIÇÕES NO ARRAY E EXCLUI TODAS AS REPETIÇÕES
        //ENTÃO SE CASO TODOS OS GRUPOS RETORNOU 9 IRA GERÁ APENAS UMA LINHA
        //CASO TENHA ALGUM RETORNO DIFERENTE DE 9 NA CONTAGEM ACIMA
        //É GERADO MAIS QUE UMA LINHA
        $final = array_unique($result);

        //RETORNA O NÚMERO DE LINHAS
        return count($final);
    }

    public static function verificarLinhaColuna($gruposL)
    {
        $grupo1 = ['A', 'B', 'C'];
        $grupo2 = ['D', 'E', 'F'];
        $grupo3 = ['G', 'H', 'I'];
        $grupoCol1 = ['A', 'D', 'G'];
        $grupoCol2 = ['B', 'E', 'H'];
        $grupoCol3 = ['C', 'F', 'I'];

        $functions = new functions;

        $quadranteLin1 = $functions->gerarLinha($gruposL, $grupo1, 1, 2, 3);
        $quadranteLin2 = $functions->gerarLinha($gruposL, $grupo2, 4, 5, 6);
        $quadranteLin3 = $functions->gerarLinha($gruposL, $grupo3, 7, 8, 9);

        $quadranteCol1 = $functions->gerarColuna($gruposL, $grupoCol1, 1, 2, 3);
        $quadranteCol2 = $functions->gerarColuna($gruposL, $grupoCol2, 4, 5, 6);
        $quadranteCol3 = $functions->gerarColuna($gruposL, $grupoCol3, 7, 8, 9);

        $linhas = array_merge($quadranteLin1, $quadranteLin2, $quadranteLin3);
        $colunas = array_merge($quadranteCol1, $quadranteCol2, $quadranteCol3);


        for ($num = 0; $num < 9; $num++) {
            $resultLinhas[$num] = (count(array_unique($linhas[$num]))) == 9 ? 1 : 0;
            $resultColunas[$num] = (count(array_unique($colunas[$num]))) == 9 ? 1 : 0;
        }
        $finalLinha = array_unique($resultLinhas);
        $finalColuna = array_unique($resultColunas);
        if (count($finalLinha) === 1 && $finalLinha[0] === 1 && count($finalColuna) === 1 && $finalColuna[0] === 1) {
            //SE TUDO TIVER CERTO, RETORNA UM ARRAY COM CHAVE 0 E VALOR 1
            return 1;
        }
        return 0;
    }

    private function gerarLinha($dados, $quadrantes, $n1, $n2, $n3)
    {
        foreach ($quadrantes as $letra) {
            for ($a = 1; $a <= 3; $a++) {
                $linha[$n1][] = $dados[$letra][$a];
            }
            for ($b = 4; $b <= 6; $b++) {
                $linha[$n2][] = $dados[$letra][$b];
            }
            for ($c = 7; $c <= 9; $c++) {
                $linha[$n3][] = $dados[$letra][$c];
            }
        }
        return $linha;
    }
    private function gerarColuna($dados, $quadrantes, $n1, $n2, $n3)
    {

        foreach ($quadrantes as $letra) {
            for ($a = 1; $a <= 7; $a = $a + 3) {
                $coluna[$n1][] = $dados[$letra][$a];
            }
            for ($b = 2; $b <= 8; $b = $b + 3) {
                $coluna[$n2][] = $dados[$letra][$b];
            }
            for ($c = 3; $c <= 9; $c = $c + 3) {
                $coluna[$n3][] = $dados[$letra][$c];
            }
        }
        return $coluna;
    }
}
