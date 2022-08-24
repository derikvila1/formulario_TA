/*Bandeiras*/
const Brasil = document.querySelector('.portugues')
const EstadosUnidos = document.querySelector('.ingles')
const Espanha = document.querySelector('.espanhol')

//idioma brasil 
Brasil.addEventListener('click', () => {
        document.querySelector('.idioma-text').innerHTML = 'Idioma:'
        document.querySelector('.Idioma-titulo').innerHTML = 'Gostaríamos de obter seu feedback em relação à experiência de conhecer nosso maior patrimônio histórico e cultural. Vamos lá?'
        document.querySelector('.form-titulo').innerHTML = 'Formulário'
        document.querySelector('.nome-form').innerHTML = 'Nome:'
        document.querySelector('.contato-form').innerHTML = 'Contato:'
        document.querySelector('.email-form').innerHTML = 'E-mail:'
        document.querySelector('.pais-form').innerHTML = 'País:'
        document.querySelector('.cidade-form').innerHTML = 'Cidade:'
        document.querySelector('.radio-titulo').innerHTML = 'Com relação ao Teatro Amazonas, avalie os seguintes tópicos'
        document.querySelector('.cafe-idioma').innerHTML = 'Café'
        document.querySelector('.loja-idioma').innerHTML = 'Loja'
        document.querySelector('.eficiencia').innerHTML = 'Eficiência'
        document.querySelector('.condutores').innerHTML = 'Condutores/Visitação'
        document.querySelector('.postura').innerHTML = 'Postura'
        document.querySelector('.instalacoes').innerHTML = 'Instalações'
        document.querySelector('.sinalizacao').innerHTML = 'Sinalização'
        document.querySelector('.conservacao').innerHTML = 'Conservação'
        document.querySelector('.contexto').innerHTML = 'Contextualização Histórica'
        document.querySelector('.bilheteria').innerHTML = 'Bilheteria'
        document.querySelector('.conforto').innerHTML = 'Conforto'
        document.querySelector('.limpeza').innerHTML = 'Limpeza'


        valores = document.querySelectorAll(".valores");
        for (let i = 0; i < valores.length; i++) {
            valores[i].innerHTML = 'Valores';
        }


        cordialidade = document.querySelectorAll(".cordialidade");
        for (let i = 0; i < cordialidade.length; i++) {
            cordialidade[i].innerHTML = 'Cordialidade';
        }

        variedade = document.querySelectorAll(".variedade");
        for (let i = 0; i < variedade.length; i++) {
            variedade[i].innerHTML = 'Variedade de Produtos';
        }

        atendimento = document.querySelectorAll(".atendimento");
        for (let i = 0; i < atendimento.length; i++) {
            atendimento[i].innerHTML = 'Atendimento';
        }

        const nodeList = document.querySelectorAll(".otimo");
        for (let i = 0; i < nodeList.length; i++) {
            nodeList[i].innerHTML = 'Ótimo';
        }

        const bom = document.querySelectorAll(".Bom");
        for (let i = 0; i < bom.length; i++) {
            bom[i].innerHTML = 'Bom';
        }

        const regular = document.querySelectorAll(".regular");
        for (let i = 0; i < regular.length; i++) {
            regular[i].innerHTML = 'Regular';
        }

        const ruim = document.querySelectorAll(".ruim");
        for (let i = 0; i < ruim.length; i++) {
            ruim[i].innerHTML = 'Ruim';
        }

        document.querySelector('.criticas-titulo').innerHTML = 'Criticas, Elogios ou Sugestões:'
        document.querySelector('.button-confirmar').value = 'Confirmar'
    })

//idioma ingles
EstadosUnidos.addEventListener('click', () => {
    document.querySelector('.idioma-text').innerHTML = 'Language:'
    document.querySelector('.Idioma-titulo').innerHTML = 'We would like to get your feedback regarding the experience of getting to know our greatest historical and cultural heritage. Shall we?'
    document.querySelector('.form-titulo').innerHTML = 'Form'
    document.querySelector('.nome-form').innerHTML = 'Name:'
    document.querySelector('.contato-form').innerHTML = 'Contact:'
    document.querySelector('.email-form').innerHTML = 'E-mail:'
    document.querySelector('.pais-form').innerHTML = 'Country:'
    document.querySelector('.cidade-form').innerHTML = 'City:'
    document.querySelector('.radio-titulo').innerHTML = 'Regarding the Amazonas Opera House, rate the following topics'
    document.querySelector('.cafe-idioma').innerHTML = 'Coffee'
    document.querySelector('.loja-idioma').innerHTML = 'Store'
    document.querySelector('.eficiencia').innerHTML = 'Efficiency'
    document.querySelector('.condutores').innerHTML = 'Guides/Visitation'
    document.querySelector('.postura').innerHTML = 'Attitude '
    document.querySelector('.instalacoes').innerHTML = 'Structure'
    document.querySelector('.sinalizacao').innerHTML = 'Signaling'
    document.querySelector('.conservacao').innerHTML = 'Conservation'
    document.querySelector('.contexto').innerHTML = 'Historical Context'
    document.querySelector('.bilheteria').innerHTML = 'Ticket Office'
    document.querySelector('.conforto').innerHTML = 'Comfort'
    document.querySelector('.limpeza').innerHTML = 'Cleaning'

    valores = document.querySelectorAll(".valores");
    for (let i = 0; i < valores.length; i++) {
        valores[i].innerHTML = 'Prices ';
    }


    cordialidade = document.querySelectorAll(".cordialidade");
    for (let i = 0; i < cordialidade.length; i++) {
        cordialidade[i].innerHTML = 'Cordiality ';
    }

    variedade = document.querySelectorAll(".variedade");
    for (let i = 0; i < variedade.length; i++) {
        variedade[i].innerHTML = 'Items Variety';
    }

    atendimento = document.querySelectorAll(".atendimento");
    for (let i = 0; i < atendimento.length; i++) {
        atendimento[i].innerHTML = 'Service';
    }

    const nodeList = document.querySelectorAll(".otimo");
    for (let i = 0; i < nodeList.length; i++) {
        nodeList[i].innerHTML = 'Excellent';
    }

    const bom = document.querySelectorAll(".Bom");
    for (let i = 0; i < bom.length; i++) {
        bom[i].innerHTML = 'Good ';
    }

    const regular = document.querySelectorAll(".regular");
    for (let i = 0; i < regular.length; i++) {
        regular[i].innerHTML = 'Fair';
    }

    const ruim = document.querySelectorAll(".ruim");
    for (let i = 0; i < ruim.length; i++) {
        ruim[i].innerHTML = 'Poor';
    }

    document.querySelector('.criticas-titulo').innerHTML = 'Comments, compliments or suggestions '
    document.querySelector('.button-confirmar').value = 'Confirm'
})
//Idioma Espanhol

Espanha.addEventListener('click', () => {
    document.querySelector('.idioma-text').innerHTML = 'Idioma:'
    document.querySelector('.Idioma-titulo').innerHTML = 'Nos gustaría conocer tu opinión sobre la experiencia de conocer nuestro mayor patrimonio histórico y cultural. ¿Vamos?'
    document.querySelector('.form-titulo').innerHTML = 'Forma'
    document.querySelector('.nome-form').innerHTML = 'Nombre:'
    document.querySelector('.contato-form').innerHTML = 'Contacto:'
    document.querySelector('.email-form').innerHTML = 'E-mail:'
    document.querySelector('.pais-form').innerHTML = 'País:'
    document.querySelector('.cidade-form').innerHTML = 'Ciudad:'
    document.querySelector('.radio-titulo').innerHTML = 'Sobre el Teatro Amazonas evalue los siguientes temas:'
    document.querySelector('.cafe-idioma').innerHTML = 'Café'
    document.querySelector('.loja-idioma').innerHTML = 'Tienda de Artesanato'
    document.querySelector('.eficiencia').innerHTML = 'Eficiencia'
    document.querySelector('.condutores').innerHTML = 'Guías/Visita'
    document.querySelector('.postura').innerHTML = 'Postura'
    document.querySelector('.instalacoes').innerHTML = 'Instalaciones'
    document.querySelector('.sinalizacao').innerHTML = 'Señalización'
    document.querySelector('.conservacao').innerHTML = 'Conservación'
    document.querySelector('.contexto').innerHTML = 'Contextualización Histórica'
    document.querySelector('.bilheteria').innerHTML = 'Taquilla'
    document.querySelector('.conforto').innerHTML = 'Confort'
    document.querySelector('.limpeza').innerHTML = 'Limpieza'

    valores = document.querySelectorAll(".valores");
    for (let i = 0; i < valores.length; i++) {
        valores[i].innerHTML = 'Precios';
    }


    cordialidade = document.querySelectorAll(".cordialidade");
    for (let i = 0; i < cordialidade.length; i++) {
        cordialidade[i].innerHTML = 'Cordialidad';
    }

    variedade = document.querySelectorAll(".variedade");
    for (let i = 0; i < variedade.length; i++) {
        variedade[i].innerHTML = 'Variedad de Productos';
    }

    atendimento = document.querySelectorAll(".atendimento");
    for (let i = 0; i < atendimento.length; i++) {
        atendimento[i].innerHTML = 'Atención al público';
    }

    const nodeList = document.querySelectorAll(".otimo");
    for (let i = 0; i < nodeList.length; i++) {
        nodeList[i].innerHTML = 'Excelente';
    }

    const bom = document.querySelectorAll(".Bom");
    for (let i = 0; i < bom.length; i++) {
        bom[i].innerHTML = 'Bueno ';
    }

    const regular = document.querySelectorAll(".regular");
    for (let i = 0; i < regular.length; i++) {
        regular[i].innerHTML = 'Regular';
    }

    const ruim = document.querySelectorAll(".ruim");
    for (let i = 0; i < ruim.length; i++) {
        ruim[i].innerHTML = 'Malo';
    }

    document.querySelector('.criticas-titulo').innerHTML = 'Críticas, elogios o sugerencias'
    document.querySelector('.button-confirmar').value = 'Confirmar'
})