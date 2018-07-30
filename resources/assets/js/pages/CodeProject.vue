<template>
    <div id="CodeProject">
        <div class="desc-block">
            <h2 class="header">{{ name }}</h2>
            <p class="desc-text body" v-html="desc"></p>
            <h3 class="tech-title" >Technologies</h3>
            <div class="tech-chips">
              <tech-chip v-for="t in technologies" :key="t" :text="t"></tech-chip>
            </div>
            <div class="buttons-block">
              <play-store-badge v-if="playStoreLink" class="badge" :url="playStoreLink"></play-store-badge>
              <a id="button-github" class="button-link" :href="githubLink" target="_blank">
                <icon-button :icon="icGithub" text="Source code" v-on:click.native="onGithubClicked"></icon-button>
              </a>  
            </div>
        </div>
        <div
          v-if="screenshots"
          class="screenshots-block" >
             <div class="screenshot-container" v-for="s in screenshots" :key="s">
              <img class="screenshot" :src="s"/>
            </div>
        </div>
    </div>
</template>

<script>
import TechChip from "./TechChip.vue";
import IconButton from "../ui/IconButton.vue";
import PlayStoreBadge from "../ui/PlayStoreBadge.vue";
import Flickity from "../../../../node_modules/flickity-imagesloaded/flickity-imagesloaded";

export default {
  name: "CodeProject",
  props: {
    name: String,
    desc: String,
    technologies: Array,
    githubLink: String,
    playStoreLink: String,
    screenshots: Array
  },
  components: {
    TechChip,
    PlayStoreBadge,
    IconButton
  },
  methods: {
    onGithubClicked() {
      this.$ga.event("click", "projectSource", this.githubLink);
    },
  },
    mounted() {
        this.$nextTick(function () {
            let elems = document.getElementsByClassName('screenshots-block');
            for (let i = 0; i<elems.length; i++ ){
                 new Flickity( elems[i], {
                    imagesLoaded: true,
                    lazyLoad: true,
                    pageDots: false,
                    wrapAround: true
                });

            }

        })
    },
  data: function() {
    return {
      icGithub: require("../../icons/ic_github_light.svg")
    };
  }

};

</script>

<style lang="scss" scoped>
@import "../../../../node_modules/flickity/css/flickity.css";
@import '../../styles/common/media-queries';
#CodeProject {
    display: flex;
    flex-direction: row-reverse;
    justify-content: flex-end;
    margin: 8% auto;
    width: 90vw;
    padding: 10px;
    @include desktop-and-up {
        max-height: 70vh;
    }
    @include mobile-only {
        padding: 0px;
        flex-wrap: wrap;
        justify-content: center;
    }
}

.desc-block {
    width: 60%;
    padding: 0 20px;
    box-sizing: border-box;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    margin: 0 5%;
    @include mobile-only {
        width: 100%;
    }

    .header {
        align-self: flex-start;
    }

    .desc-text {
        max-width: 500px;
        line-height: 35px;
    }

    .tech-title {
        height: 44px;
    }

    .tech-chips {
        margin-bottom: auto;
        margin-left: -8px;
    }

    .button-link {
        text-decoration: none;
    }

    .buttons-block {
        align-self: stretch;
        display: flex;
        flex-direction: row;
        align-content: center;
        align-items: center;
        justify-content: flex-start;

        margin-top: 8%;
        @include mobile-only {
            flex-direction: column;
            margin-top: 5%;
            align-self: center;
        }

        #button-github {
            margin-bottom: 1%;
        }

        .badge {
            @include tablet-portrait-and-up {
                margin-right: 20px;
            }
            margin-left: 0px;
        }
    }
}

$heightScreenshot: 450px;

.screenshots-block {
    width: 40%;
    height: $heightScreenshot;
    @include mobile-only {
        width: 100%;
        margin: 10% 4%;
    }
}

.screenshot-container {
    width: 100%;
    height: 100%;
}

.screenshot {
    display: block;
    max-width: 100%;
    max-height: 100%;
    margin: 0 auto;
}
</style>
