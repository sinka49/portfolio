<template>
    <div id="projects">
        <rise-loader :loading="loading" :color="color" id="rise-loader"></rise-loader>
             <code-project
                 v-for="p in devProjects"
                 :key="p.content"
                 :name="p.name"
                 :description="p.description"
                 :technologies="p.technologies"
                 :github-link="p.githubLink"
                 :play-store-link="p.playStoreLink"
                 :screenshots="p.screenshots"
                 ></code-project>
    </div>
</template>

<script>
import CodeProject from "./CodeProject.vue";
import axios from 'axios';
import RiseLoader from 'vue-spinner/src/RiseLoader.vue'


export default {
    name: "Projects",
    components: {
        RiseLoader,
        CodeProject
    },
    beforeMount() {
        this.loading = true;
        console.log(this.loading)
    },
    mounted(){
        this.fetchData();
    },
    data() {
        return {
            devProjects: this.devProjects,
            error: null,
            color: "#9135E0",
            loading: this.loading,
        };
    },
    methods: {
        fetchData() {
            this.error =  null;
            this.devProjects = null;
            axios
                .get('/api/projects')
                .then(response => {
                    let data = response.data;
                    for (var i = 0; i< data.length; i++){
                        let technologies = JSON.parse(data[i].technologies);
                        let screenshots = JSON.parse(data[i].screenshots);
                        data[i].technologies = technologies;
                        data[i].screenshots = screenshots;
                    }

                    this.devProjects = data;
                    this.loading = false;
                    console.log(this.loading)
                });

        },


    }
}


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

#rise-loader{
    width: 100%;
    margin-top: 300px;

}
</style>
