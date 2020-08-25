<template>
    <div class="container d-flex align-items-center justify-content-center vh-100">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-10">
                <div class="card">
                    <div class="card-header bg-dark">
                        <div class="app-brand bg-dark">
                            <a href="/">
                                <img
                                    class="img-fluid"
                                    src="/img/logos/120x120-precomposed.png"
                                    alt="logo do vendo meu livro"
                                />
                                <span class="brand-name">Vendo meu livro</span>
                            </a>
                        </div>
                    </div>
                    <div class="card-body p-5">
                        <h4 class="text-dark mb-5">Criar conta</h4>
                        <form method="POST" action="/register">
                            <div class="row" v-if="submit.index == 0">
                                <div class="form-group col-md-12 mb-4">
                                    <input
                                        type="email"
                                        class="form-control input-lg"
                                        :class="{'is-invalid': error.email, 'is-valid': error.email == undefined}"
                                        id="email"
                                        name="email"
                                        v-model="input.email"
                                        required
                                        autocomplete="email"
                                        aria-describedby="emailHelp"
                                        placeholder="Email"
                                    />
                                    <span class="invalid-feedback" role="alert" v-if="error.email">
                                        <strong>{{ error.email }}</strong>
                                    </span>
                                </div>
                                <div class="form-group col-md-12">
                                    <input
                                        type="password"
                                        class="form-control input-lg"
                                        :class="{'is-invalid': error.password, 'is-valid': error.password == undefined}"
                                        v-model="input.password"
                                        name="password"
                                        required
                                        autocomplete="new-password"
                                        id="password"
                                        placeholder="Senha"
                                    />
                                    <span
                                        class="invalid-feedback"
                                        role="alert"
                                        v-if="error.password"
                                    >
                                        <strong>{{ error.password }}</strong>
                                    </span>
                                </div>
                                <div class="form-group col-md-12">
                                    <input
                                        type="password"
                                        class="form-control input-lg"
                                        :class="{'is-invalid': error.password_confirmation, 'is-valid': error.password_confirmation == undefined}"
                                        id="password-confirm"
                                        name="password_confirmation"
                                        v-model="input.password_confirmation"
                                        required
                                        autocomplete="new-password"
                                        placeholder="Confirmação de senha"
                                    />
                                </div>
                                <div class="col-md-12">
                                    <div class="d-inline-block mr-3">
                                        <label class="control control-checkbox">
                                            <input
                                                type="checkbox"
                                                name="termos"
                                                v-model="input.termos"
                                            />
                                            <div class="control-indicator"></div>Eu concordo com os termos e condições
                                        </label>
                                        <span
                                            class="invalid-feedback"
                                            role="alert"
                                            v-if="error.termos"
                                        >
                                            <strong>{{ error.termos }}</strong>
                                        </span>
                                    </div>
                                    <button
                                        type="submit"
                                        class="btn btn-lg btn-dark btn-block mb-4"
                                        v-on:click.prevent.stop="submitAction()"
                                    >{{ submit.text }}</button>
                                    <p>
                                        Já tem uma conta?
                                        <a class="text-blue" href="/login">Login</a>
                                    </p>
                                </div>
                            </div>
                            <div class="row" v-else-if="submit.index == 1">
                                <div class="form-group col-md-12 mb-4">
                                    <label for="sexoFormControlSelect">Tipo de conta</label>
                                    <select
                                        class="form-control"
                                        name="type"
                                        required
                                        v-model="input.type"
                                    >
                                        <option selected value="f">Pessoa Física</option>
                                        <option value="j">Pessoa Jurídica</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-12 mb-4">
                                    <input
                                        type="text"
                                        class="form-control input-lg"
                                        :class="{'is-valid': error.name == undefined, 'is-invalid': error.name }"
                                        id="name"
                                        name="name"
                                        v-model="input.name"
                                        required
                                        autocomplete="name"
                                        autofocus
                                        aria-describedby="nameHelp"
                                        :placeholder="`${input.type == 'f' ? 'Nome completo' : 'Razão Social'}`"
                                    />
                                    <span class="invalid-feedback" role="alert" v-if="error.name">
                                        <strong>{{ error.name }}</strong>
                                    </span>
                                </div>
                                <div class="form-group col-md-12 mb-4">
                                    <input
                                        type="text"
                                        class="form-control input-lg"
                                        :class="{'is-invalid': error.cpf, 'is-valid': error.cpf == undefined }"
                                        id="cpf"
                                        name="cpf"
                                        v-model="input.cpf"
                                        required
                                        autocomplete="cpf"
                                        aria-describedby="cpfHelp"
                                        :placeholder="`${input.type == 'f' ? 'CPF' : 'CNPJ'}`"
                                    />
                                    <span class="invalid-feedback" role="alert" v-if="error.cpf">
                                        <strong>{{ error.cpf }}</strong>
                                    </span>
                                </div>
                                <div class="form-group col-md-12 mb-4">
                                    <input
                                        type="text"
                                        class="form-control input-lg"
                                        :class="{'is-invalid': error.telefone, 'is-valid': error.telefone == undefined}"
                                        id="telefone"
                                        name="telefone"
                                        v-model="input.telefone"
                                        required
                                        autocomplete="telephone"
                                        aria-describedby="telefoneHelp"
                                        placeholder="Telefone"
                                    />
                                    <span
                                        class="invalid-feedback"
                                        role="alert"
                                        v-if="error.telefone"
                                    >
                                        <strong>{{ error.telefone }}</strong>
                                    </span>
                                </div>
                                <div class="form-group col-md-12 mb-4" v-if="input.type == 'j'">
                                    <input
                                        type="text"
                                        class="form-control input-lg"
                                        :class="{'is-invalid': error.ie, 'is-valid': error.ie == undefined}"
                                        id="ie"
                                        name="ie"
                                        v-model="input.ie"
                                        aria-describedby="ieHelp"
                                        placeholder="Incrição Estadual"
                                    />
                                    <span
                                        class="invalid-feedback"
                                        role="alert"
                                        v-if="error.ie"
                                    >
                                        <strong>{{ error.ie }}</strong>
                                    </span>
                                    <small v-else id="ieHelp" class="form-text text-muted">Se você for isento, deixe em branco.</small>
                                </div>
                                <div class="form-group col-md-12" v-if="input.type == 'f'">
                                    <label for="sexoFormControlSelect">Sexo</label>
                                    <select
                                        class="form-control"
                                        id="sexoFormControlSelect"
                                        name="sexo"
                                        required
                                        v-model="input.sexo"
                                    >
                                        <option selected value="m">Masculino</option>
                                        <option value="f">Feminino</option>
                                    </select>
                                    <span class="invalid-feedback" role="alert" v-if="error.sexo">
                                        <strong>{{ error.sexo }}</strong>
                                    </span>
                                </div>
                                <div class="form-group col-md-12" v-if="input.type == 'f'">
                                    <label for="nascimento">Data de nascimento</label>
                                    <input
                                        type="date"
                                        class="form-control input-lg"
                                        :class="{'is-invalid': error.nascimento, 'is-valid': error.nascimento == undefined}"
                                        id="nascimento"
                                        name="nascimento"
                                        :value="input.nascimento && input.nascimento.toISOString().split('T')[0]"
                                        @input="input.nascimento = $event.target.valueAsDate"
                                        required
                                        placeholder="Data de nascimento"
                                        style="padding: 0 15px;"
                                    />
                                </div>
                                <div class="col-md-12">
                                    <button
                                        type="submit"
                                        class="btn btn-lg btn-dark btn-block mb-4"
                                        v-on:click.prevent.stop="submitAction()"
                                    >{{ submit.text }}</button>
                                    <p>
                                        Já tem uma conta?
                                        <a class="text-blue" href="/login">Login</a>
                                    </p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Register",
    data() {
        return {
            input: {
                name: "",
                email: "",
                password: "",
                password_confirmation: "",
                termos: "",
                cpf: "",
                telefone: "",
                sexo: "m",
                nascimento: "",
                type: "f",
                ie: "",
            },
            error: {
                name: "",
                email: "",
                password: "",
                cpf: "",
                telefone: "",
                sexo: "",
                nascimento: "",
                password_confirmation: "",
                ie: "",
            },
            submit: {
                text: "Registre-se",
                index: 0,
            },
        };
    },
    methods: {
        submitAction: function () {
            this.submit.index++;
        },
    },
};
</script>

<style>
</style>
