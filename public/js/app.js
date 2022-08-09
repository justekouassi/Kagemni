let text = "Etes-vous 2 sûr de supprimer cet utilisateur ?\nTous ses projets, ses cours et ses encadrements disparaîtront avec lui."
var elems = document.getElementsByClassName('confirmation');
for (var i = 0, l = elems.length; i < l; i++) {
	elems[i].onclick = function() {
		return confirm(text);
	};
}


// var elems = document.getElementsByClassName('confirmation');
// var confirmIt = function (e) {
// 	if (!confirm(text)) e.preventDefault();
// };
// for (var i = 0, l = elems.length; i < l; i++) {
// 	elems[i].addEventListener('click', confirmIt, false);
// }

// // import './bootstrap'

// const ecole = document.getElementById('ecole')
// const filiere = document.getElementById('ecole')
// const classe = document.getElementById('ecole')

// filieres_cpge = ['MPSI', 'BCPST', 'ECS']
// filieres_esa = ['Agro', 'Bio']
// filieres_escae = ['ECS', 'CAE', 'ESCA', 'ILT']
// filieres_esi = ['STIC', 'STGI', 'STGP']
// filieres_espe = ['PTRL', 'Energie']
// filieres_esmg = ['Mines', 'Géologie']
// filieres_estp = ['TP', 'GU', 'GC']

// window.addEventListener('DOMContentLoaded', function () {
// 	for (var i = 0; i < ecole.options.length; i++) {
// 		if (ecole.options[i].selected === true) {
// 			var ecole_selected = ecole.options[i].value
// 			if (ecole_selected === 'CPGE') {
// 				const filiere = document.getElementById('filiere')
// 				filieres_cpge = ['MPSI', 'BCPST', 'ECS']

// 				var combo = document.createElement('select')

// 				while (filieres_cpge.length) {
// 					var cpge = filieres_cpge.pop()
// 					var opt = new Option(cpge, cpge)
// 					combo.options[combo.options.length] = opt
// 				}
// 				filiere.appendChild(combo)
// 			}
// 			// console.log(ecole.options[i].value);
// 		}
// 	}
// })