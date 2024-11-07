<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>fche paie</title>
</head>
<body>
  <h1 class="font-bold">Fiche de Paie - Détails de l'Employé</h1>
    <p>Nom : {{ $employe->nom }}</p>
    <p>Prénom : {{ $employe->prenom }}</p>
    <p>CIN : {{ $employe->cin }}</p>
    <p>Période : {{ $employe->periode }}</p>

   
    <table class="w-full text-lg text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th>Rubriques</th>
                <th>Nombre ou taux</th>
                <th>Gains</th>
                <th>Total</th>
                <th>Retenues</th>
            </tr>
        </thead>
        <tbody>
            <!-- Salaire de base -->
            <tr class="border-b">
                <td>Salaire de base</td>
                <td></td>
                <td>{{ number_format($employe->salaire_base, 2, ',', ' ') }}</td>
                <td></td>
                <td></td>
            </tr>

            <!-- Prime d'ancienneté -->
            <tr class="border-b">
                <td>Prime d'ancienneté</td>
                <td>{{ $taux }}%</td>
                <td>{{ number_format($primeAnciennete, 2, ',', ' ') }}</td>
                <td></td>
                <td></td>
            </tr>

            <!-- Indemnités -->
            <tr class="border-b">
                <td>Indemnités imposables</td>
                <td></td>
                <td>{{ number_format(array_sum($indemnitesImposables), 2, ',', ' ') }}</td>
                <td></td>
                <td></td>
            </tr>
            <tr class="border-b">
                <td>Indemnités non imposables</td>
                <td></td>
                <td></td>
                <td>{{ number_format(array_sum($indemnitesNonImposables), 2, ',', ' ') }}</td>
                <td></td>
            </tr>

            <!-- Salaire brut -->
            <tr class="border-b">
                <td>Salaire brut</td>
                <td></td>
                <td>{{ number_format($gainSalaireBrut, 2, ',', ' ') }}</td>
                <td>{{ number_format($salaireBrutTotal, 2, ',', ' ') }}</td>
                <td></td>
            </tr>

            <!-- Cotisations -->
            <tr class="border-b">
                <td>Cotisation CNSS</td>
                <td>4.48%</td>
                <td></td>
                <td></td>
                <td>{{ number_format($cnss, 2, ',', ' ') }}</td>
            </tr>
            <tr class="border-b">
                <td>Cotisation AMO</td>
                <td>2.26%</td>
                <td></td>
                <td></td>
                <td>{{ number_format($amo, 2, ',', ' ') }}</td>
            </tr>
            <tr class="border-b">
                <td>Assurance Maladie</td>
                <td></td>
                <td></td>
                <td></td>
                <td>{{ number_format($assuranceMaladie, 2, ',', ' ') }}</td>
            </tr>
            <tr class="border-b">
                <td>Assurance Retraite Complémentaire</td>
                <td></td>
                <td></td>
                <td></td>
                <td>{{ number_format($assuranceRetraite, 2, ',', ' ') }}</td>
            </tr>

            <!-- Totaux -->
            <tr class="border-b">
                <td>Salaire net imposable</td>
                <td></td>
                <td></td>
                <td>{{ number_format($salaireNetImposable, 2, ',', ' ') }}</td>
                <td></td>
            </tr>

            <!-- Salaire net -->
            <tr class="border-b">
                <td><strong>Salaire net</strong></td>
                <td></td>
                <td></td>
                <td></td>
                <td><strong>{{ number_format($salaireNetImposable - $totalRetenues, 2, ',', ' ') }}</strong></td>
            </tr>
        </tbody>
    </table> 
</body>
</html>