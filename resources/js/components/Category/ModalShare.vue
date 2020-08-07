<template>
  <div
    class="modal fade"
    id="modalShare"
    tabindex="-1"
    aria-labelledby="modalShareLabel"
    aria-hidden="true"
  >
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalShareLabel">Compartilhar</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="share-panel">
            <div class="network-section">
              <div class="row social-buttons">
                <div class="col-xs-2 col-sm-2 col-3 mt-2">
                  <a
                    :href="`https://www.facebook.com/sharer/sharer.php?u=${this.social.link}`"
                    class="btn btn-lg btn-block btn-facebook"
                    data-toggle="tooltip"
                    data-placement="top"
                    title="Facebook"
                    target="_blank"
                  >
                    <svg viewBox="0 0 512 512">
                      <path
                        d="M211.9 197.4h-36.7v59.9h36.7V433.1h70.5V256.5h49.2l5.2-59.1h-54.4c0 0 0-22.1 0-33.7 0-13.9 2.8-19.5 16.3-19.5 10.9 0 38.2 0 38.2 0V82.9c0 0-40.2 0-48.8 0 -52.5 0-76.1 23.1-76.1 67.3C211.9 188.8 211.9 197.4 211.9 197.4z"
                      />
                    </svg>
                    <!--[if lt IE 9]><em>Facebook</em><![endif]-->
                  </a>
                </div>
                <div class="col-xs-2 col-sm-2 col-3 mt-2">
                  <a
                    :href="`http://twitter.com/share?text=${this.social.title}&url=${this.social.link}`"
                    class="btn btn-lg btn-block btn-twitter"
                    data-toggle="tooltip"
                    data-placement="top"
                    title="Twitter"
                    target="_blank"
                  >
                    <svg viewBox="0 0 512 512">
                      <path
                        d="M419.6 168.6c-11.7 5.2-24.2 8.7-37.4 10.2 13.4-8.1 23.8-20.8 28.6-36 -12.6 7.5-26.5 12.9-41.3 15.8 -11.9-12.6-28.8-20.6-47.5-20.6 -42 0-72.9 39.2-63.4 79.9 -54.1-2.7-102.1-28.6-134.2-68 -17 29.2-8.8 67.5 20.1 86.9 -10.7-0.3-20.7-3.3-29.5-8.1 -0.7 30.2 20.9 58.4 52.2 64.6 -9.2 2.5-19.2 3.1-29.4 1.1 8.3 25.9 32.3 44.7 60.8 45.2 -27.4 21.4-61.8 31-96.4 27 28.8 18.5 63 29.2 99.8 29.2 120.8 0 189.1-102.1 185-193.6C399.9 193.1 410.9 181.7 419.6 168.6z"
                      />
                    </svg>
                    <!--[if lt IE 9]><em>Twitter</em><![endif]-->
                  </a>
                </div>
                <div class="col-xs-2 col-sm-2 col-3 mt-2">
                  <a
                    :href="`https://pinterest.com/pin/create/button/?url=${this.social.link}&media=${this.social.image}&hubs_signup-url=null&hubs_signup-cta=null`"
                    class="btn btn-lg btn-block btn-pinterest"
                    data-toggle="tooltip"
                    data-placement="top"
                    title="Pinterest"
                    target="_blank"
                  >
                    <svg viewBox="0 0 512 512">
                      <path
                        d="M266.6 76.5c-100.2 0-150.7 71.8-150.7 131.7 0 36.3 13.7 68.5 43.2 80.6 4.8 2 9.2 0.1 10.6-5.3 1-3.7 3.3-13 4.3-16.9 1.4-5.3 0.9-7.1-3-11.8 -8.5-10-13.9-23-13.9-41.3 0-53.3 39.9-101 103.8-101 56.6 0 87.7 34.6 87.7 80.8 0 60.8-26.9 112.1-66.8 112.1 -22.1 0-38.6-18.2-33.3-40.6 6.3-26.7 18.6-55.5 18.6-74.8 0-17.3-9.3-31.7-28.4-31.7 -22.5 0-40.7 23.3-40.7 54.6 0 19.9 6.7 33.4 6.7 33.4s-23.1 97.8-27.1 114.9c-8.1 34.1-1.2 75.9-0.6 80.1 0.3 2.5 3.6 3.1 5 1.2 2.1-2.7 28.9-35.9 38.1-69 2.6-9.4 14.8-58 14.8-58 7.3 14 28.7 26.3 51.5 26.3 67.8 0 113.8-61.8 113.8-144.5C400.1 134.7 347.1 76.5 266.6 76.5z"
                      />
                    </svg>
                    <!--[if lt IE 9]><em>Pinterest</em><![endif]-->
                  </a>
                </div>
                <div class="col-xs-2 col-sm-2 col-3 mt-2">
                  <a
                    :href="`https://www.linkedin.com/shareArticle?mini=true&url=${this.social.link}&title=${this.social.title}&summary=${this.social.summary}`"
                    class="btn btn-lg btn-block btn-linkedin"
                    data-toggle="tooltip"
                    data-placement="top"
                    title="linkedIn"
                    target="_blank"
                  >
                    <svg viewBox="0 0 512 512">
                      <path
                        d="M186.4 142.4c0 19-15.3 34.5-34.2 34.5 -18.9 0-34.2-15.4-34.2-34.5 0-19 15.3-34.5 34.2-34.5C171.1 107.9 186.4 123.4 186.4 142.4zM181.4 201.3h-57.8V388.1h57.8V201.3zM273.8 201.3h-55.4V388.1h55.4c0 0 0-69.3 0-98 0-26.3 12.1-41.9 35.2-41.9 21.3 0 31.5 15 31.5 41.9 0 26.9 0 98 0 98h57.5c0 0 0-68.2 0-118.3 0-50-28.3-74.2-68-74.2 -39.6 0-56.3 30.9-56.3 30.9v-25.2H273.8z"
                      />
                    </svg>
                    <!--[if lt IE 9]><em>linkedIn</em><![endif]-->
                  </a>
                </div>
                <div class="col-xs-2 col-sm-2 col-3 mt-2">
                  <a
                    :href="`http://tumblr.com/widgets/share/tool?canonicalUrl=${this.social.link}`"
                    class="btn btn-lg btn-block btn-tumblr"
                    data-toggle="tooltip"
                    data-placement="top"
                    title="Tumblr"
                    target="_blank"
                  >
                    <svg viewBox="0 0 512 512">
                      <path
                        d="M210.8 80.3c-2.3 18.3-6.4 33.4-12.4 45.2 -6 11.9-13.9 22-23.9 30.5 -9.9 8.5-21.8 14.9-35.7 19.5v50.6h38.9v124.5c0 16.2 1.7 28.6 5.1 37.1 3.4 8.5 9.5 16.6 18.3 24.2 8.8 7.6 19.4 13.4 31.9 17.5 12.5 4.1 26.8 6.1 43 6.1 14.3 0 27.6-1.4 39.9-4.3 12.3-2.9 26-7.9 41.2-15v-55.9c-17.8 11.7-35.7 17.5-53.7 17.5 -10.1 0-19.1-2.4-27-7.1 -5.9-3.5-10-8.2-12.2-14 -2.2-5.8-3.3-19.1-3.3-39.7v-91.1H345.5v-55.8h-84.4v-90H210.8z"
                      />
                    </svg>
                    <!--[if lt IE 9]><em>Tumblr</em><![endif]-->
                  </a>
                </div>
                <div class="col-xs-2 col-sm-2 col-3 mt-2">
                  <a
                    :href="`mailto:?subject=${this.social.title}&body=${this.social.link}`"
                    class="btn btn-lg btn-block btn-email"
                    data-toggle="tooltip"
                    data-placement="top"
                    title="Email"
                    target="_blank"
                  >
                    <svg viewBox="0 0 512 512">
                      <path
                        d="M101.3 141.6v228.9h0.3 308.4 0.8V141.6H101.3zM375.7 167.8l-119.7 91.5 -119.6-91.5H375.7zM127.6 194.1l64.1 49.1 -64.1 64.1V194.1zM127.8 344.2l84.9-84.9 43.2 33.1 43-32.9 84.7 84.7L127.8 344.2 127.8 344.2zM384.4 307.8l-64.4-64.4 64.4-49.3V307.8z"
                      />
                    </svg>
                    <!--[if lt IE 9]><em>Email</em><![endif]-->
                  </a>
                </div>
              </div>
            </div>
            <div class="copy-link mt-3">
              <input ref="copyText" size="45" class="share-url" :value="social.link" disabled />
              <button
                v-on:click="copylink()"
                type="button"
                class="btn btn-outline-primary btn-sm"
              >Copiar</button>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "ModalShare",
  data() {
    return {
      social: {
        link: "https://vendomeulivro.com/1",
        title: "Olá Mundo tudo bem?",
      },
    };
  },
  methods: {
    copylink: function () {
      this.$refs.copyText.select();
      this.$refs.copyText.setSelectionRange(0, 99999);
      document.execCommand("copy");
    },
  },
};
</script>

<style lang="scss" scoped>
.modal-body {
  .network-section {
    .social-buttons {
      a {
        display: flex;
        justify-content: center;
        padding: 1px;

        svg {
          fill: #fff;
        }
      }
      .btn-facebook {
        background: #3b5998;
        -webkit-transition: all 0.5s ease-in-out;
        -moz-transition: all 0.5s ease-in-out;
        -o-transition: all 0.5s ease-in-out;
        transition: all 0.5s ease-in-out;

        &:hover {
          background: #172d5e;
        }

        &:focus {
          background: #fff;
          border-color: #3b5998;

          & > svg {
            fill: #3b5998;
          }
        }
      }

      .btn-twitter {
        background: #00aced;
        -webkit-transition: all 0.5s ease-in-out;
        -moz-transition: all 0.5s ease-in-out;
        -o-transition: all 0.5s ease-in-out;
        transition: all 0.5s ease-in-out;

        &:hover {
          background: #043d52;
        }

        &:focus {
          background: #fff;
          border-color: #00aced;

          & > svg {
            fill: #00aced;
          }
        }
      }

      .btn-pinterest {
        background: #cc2127;
        -webkit-transition: all 0.5s ease-in-out;
        -moz-transition: all 0.5s ease-in-out;
        -o-transition: all 0.5s ease-in-out;
        transition: all 0.5s ease-in-out;

        &:hover {
          background: #780004;
        }

        &:focus {
          background: #fff;
          border-color: #cc2127;

          & > svg {
            fill: #cc2127;
          }
        }
      }

      .btn-vk {
        background: #45668e;
        -webkit-transition: all 0.5s ease-in-out;
        -moz-transition: all 0.5s ease-in-out;
        -o-transition: all 0.5s ease-in-out;
        transition: all 0.5s ease-in-out;

        &:hover {
          background: #1a3352;
        }

        &:focus {
          background: #fff;
          border-color: #45668e;

          & > svg {
            fill: #45668e;
          }
        }
      }

      .btn-linkedin {
        background: #0976b4;
        -webkit-transition: all 0.5s ease-in-out;
        -moz-transition: all 0.5s ease-in-out;
        -o-transition: all 0.5s ease-in-out;
        transition: all 0.5s ease-in-out;

        &:hover {
          background: #004269;
        }

        &:focus {
          background: #fff;
          border-color: #0976b4;

          & > svg {
            fill: #0976b4;
          }
        }
      }

      .btn-email {
        background: #888888;
        -webkit-transition: all 0.5s ease-in-out;
        -moz-transition: all 0.5s ease-in-out;
        -o-transition: all 0.5s ease-in-out;
        transition: all 0.5s ease-in-out;

        &:hover {
          background: #747474;
        }

        &:focus {
          background: #fff;
          border-color: #888888;

          & > svg {
            fill: #888888;
          }
        }
      }

      .btn-tumblr {
        background: #35465c;
        -webkit-transition: all 0.5s ease-in-out;
        -moz-transition: all 0.5s ease-in-out;
        -o-transition: all 0.5s ease-in-out;
        transition: all 0.5s ease-in-out;

        &:hover {
          background: #142030;
        }

        &:focus {
          background: #fff;
          border-color: #35465c;

          & > svg {
            fill: #35465c;
          }
        }
      }
    }
  }

  .copy-link {
    background: #fafafa;
    padding: 5px;
    border-radius: 5px;

    .share-url {
      border: none;
      overflow: hidden;
      font-size: 14px;
      background: transparent;
    }
  }
}
</style>
