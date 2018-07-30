<template>

    <div :id="id">
             <code-project
                 v-for="p in devProjects"
                 :key="p.content"
                 :name="p.name"
                 :desc="p.desc"
                 :technologies="p.technologies"
                 :github-link="p.githubLink"
                 :play-store-link="p.playStoreLink"
                 :screenshots="p.screenshots"
                 ></code-project>
    </div>
</template>

<script>
import CodeProject from "./CodeProject.vue";
import portfolioData from '../data/portfolio.json';


export default {
  name: "Projects",
  components: {
    CodeProject
  },
  data() {
      return {
          devProjects : portfolioData
      }

  }
};
</script>

<style lang="scss">

#projects {
  display: flex;
  flex-direction: column;
  align-content: center;
  align-items: center;
  justify-content: center;
}

h1 {
  align-self: flex-start;
}

.tabs {
  display: flex;
  align-content: center;
  align-items: center;
  justify-content: center;
}


</style>
