<template>
    <div>
        <form class="form-inline align-items-start">
            <div class="form-group">
                <textarea
                    class="form-control"
                    :class="validation()"
                    rows="1"
                    name="question"
                    placeholder="Escreva uma pergunta..."
                    title="Escreva uma pergunta..."
                    maxlength="1500"
                    required
                    v-model="pergunta"
                    aria-describedby="PerguntaHelpBlock"
                ></textarea>
                <small v-if="pergunta.length == 0" id="PerguntaHelpBlock" class="form-text text-muted">
                Faça uma pergunta ao vendedor, sua pergunta deve ter no mínimo 35 caracteres e no máximo 500. ({{ pergunta.length }}/500)
                </small>
                <div v-else-if="validation() == 'is-valid'" class="valid-feedback">Parece bom!</div>
                <div v-else class="invalid-feedback">
                Faça uma pergunta ao vendedor, sua pergunta deve ter no mínimo 35 caracteres e no máximo 500. ({{ pergunta.length }}/500)
                </div>
            </div>
            <button type="submit" class="btn btn-primary mb-2">Perguntar</button>
        </form>
        <div v-if="perguntas.length > 0" class="questions-asked">
            <p class="subtitle mt-4 mb-4">Últimas perguntas</p>
            <pergunta v-for="item in perguntas" :key="item.id" :pergunta="item"></pergunta>
        </div>
        <div v-else class="questions-asked">
            <p class="subtitle mt-4 mb-4">Últimas perguntas</p>
            <pergunta v-for="(item, index) in 4" :key="index" :load="false"></pergunta>
        </div>
    </div>
</template>

<script>
export default {
    name: "PerguntaVendedor",
    props: {
        product: {
            type: String,
            default: 'a',
        },
    },
    mounted(){
        axios(`/product/pergunta/${this.$props.product}`).then((result) => {
            this.perguntas.push(...result.data.data)
            this.pagination = result.data
        })
    },
    data() {
        return {
            pergunta: '',
            submitBtn: false,
            perguntas: [],
            pagination: {},
        };
    },
    watch: {
        'pergunta': function(newValue){
            if(newValue.length > 500){
                this.pergunta = newValue.substr(0, 500)
            }
        }
    },
    methods: {
        validation: function(){
            if(this.pergunta.length == 0) return ''
            else if(this.pergunta >= 35 && this.pergunta <= 500){
                return 'is-valid'
            }else return 'is-invalid'
        },
        submit: function () {

        }
    }
};
</script>

<style>
</style>
