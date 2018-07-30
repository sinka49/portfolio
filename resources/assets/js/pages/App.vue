<template>
  <div id="app">
    <k-menu ref="mainMenu" :items="menuItems"></k-menu>
    <introduction class="page" @isVisible="onVisibilityChange"></introduction>
    <projects class="page" @isVisible="onVisibilityChange"></projects>
    <experience class="page" @isVisible="onVisibilityChange"></experience>
    <p class="caption footer" v-html="copyright"></p>
  </div> 
</template>

<script>
import KMenu from "./menu/KMenu.vue";
import Introduction from "./introduction/Introduction.vue";
import Projects from "./projects/Projects.vue";
import Experience from "./experience/Experience.vue";

export default {
  name: "app",
  components: {
    KMenu,
    Introduction,
    Projects,
    Experience
  },
  data: function() {
    const itemsMap = new Map();
    itemsMap["introduction"] = "About me";
    itemsMap["projects"] = "Projects";
    itemsMap["experience"] = "Experience";
    return {
      menuItems: itemsMap,
      copyright: 
      `
      Copyright © ${new Date().getFullYear()} Vladimir Kondenko
      <br> Made with ❤ and Vue.js
      `
    };
  },
  methods: {
    onVisibilityChange: function(id) {
      this.$refs.mainMenu.onItemSelected(id);
    }
  }
};
</script>

<style lang="scss">
#app {
  max-width: 100vw;
  display: flex;
  flex-direction: column;
  align-items: stretch;
  justify-content: center;
  align-content: flex-start;
  background: $mainBackgroundColor;
  .page {
    min-height: 100vh;
    display: block;
    padding: 25px 24px 25px;
    border-bottom: 2px solid $pageDividerColor;
    @include desktop-and-up {
      padding: 25px 50px 25px;
    }
  }
  #introduction {
    @include mobile-only {
      margin-top: 40px;
    }
  }
}

h1 {
  font-family: $font-hind-mysuru;
  font-style: normal;
  font-weight: bold;
  line-height: 125%;
  font-size: 48px;
  margin: 0;
}

h2 {
  font-family: $font-hind-madurai;
  font-style: bold;
  font-weight: 700;
  line-height: 50px;
  font-size: 36px;
  margin: 0;
}

h3 {
  font-family: $font-hind-madurai;
  font-style: normal;
  font-weight: bold;
  line-height: 50px;
  font-size: 14px;
  margin: 0;
}

.body {
  font-family: $font-hind-madurai;
  font-style: normal;
  font-weight: normal;
  font-size: 20px;
  line-height: 35px;
  text-align: start;
}

.link {
  @extend .body;
  font-family: $font-hind-madurai;
  text-decoration: underline;
  text-decoration-style: unset;
  text-decoration-line: underline;
  cursor: pointer;
  color: $accentColor;
  &:hover {
    opacity: $hoverOpacity;
  }
}

.caption {
  @extend .body;
  font-family: $font-hind-madurai;
  color: $textPrimaryColor;
  font-size: 14px;
}

.footer {
  opacity: 0.7;
  padding: 14px 0;
  text-align: center;
  margin: 0 auto;
}

#avatar {
  width: 150px;
  height: 150px;
}
</style>