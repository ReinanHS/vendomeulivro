<template>
    <article class="question-box mb-4">
        <div class="question d-flex">
            <div class="question-icon mr-3 text-secondary">
                <svg
                    width="1em"
                    height="1em"
                    viewBox="0 0 16 16"
                    class="bi bi-chat-left-fill"
                    fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        fill-rule="evenodd"
                        d="M2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"
                    />
                </svg>
            </div>
            <div class="question-text d-flex" v-if="load">
                <p class="text-muted">{{ pergunta.content }}</p>
                <a class="questions-denounce ml-2" href="#">Denunciar</a>
            </div>
            <div class="question-text d-flex" v-else>
                <div class="text-pergunta-load placeholdershimmer"></div>
            </div>
        </div>
        <div class="answer d-flex" v-if="load && pergunta.resposta">
            <div class="question-icon mr-3 text-secondary">
                <svg
                    width="1em"
                    height="1em"
                    viewBox="0 0 16 16"
                    class="bi bi-chat-right-dots-fill"
                    fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        fill-rule="evenodd"
                        d="M16 2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h9.586a1 1 0 0 1 .707.293l2.853 2.853a.5.5 0 0 0 .854-.353V2zM5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"
                    />
                </svg>
            </div>
            <div class="question-text d-flex" v-if="load && pergunta.resposta">
                <p class="font-weight-lighter">{{ pergunta.resposta }}</p>
                <a class="questions-denounce ml-2" href="#">Denunciar</a>
            </div>
            <div class="question-text d-flex" v-else>
                <div class="text-resposta-load placeholdershimmer"></div>
            </div>
        </div>
        <div class="answer d-flex" v-else>
            <div class="question-icon mr-3 text-secondary">
                <svg
                    width="1em"
                    height="1em"
                    viewBox="0 0 16 16"
                    class="bi bi-chat-right-dots-fill"
                    fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        fill-rule="evenodd"
                        d="M16 2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h9.586a1 1 0 0 1 .707.293l2.853 2.853a.5.5 0 0 0 .854-.353V2zM5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"
                    />
                </svg>
            </div>
            <div class="question-text d-flex">
                <div class="text-resposta-load placeholdershimmer"></div>
            </div>
        </div>
    </article>
</template>

<script>
export default {
    name: 'Pergunta',
    props: {
        pergunta: {
            type: Object,
            default: function(){
                return {
                    id: 0,
                    content: '',
                    resposta: '',
                }
            }
        },
        load: {
            type: Boolean,
            default: true,
        }
    },
};
</script>

<style scoped>
.text-pergunta-load {
    width: 20vw;
}
.text-resposta-load {
    width: 40vw;
    margin-top: 5px;
    height: 35px;
}
</style>
