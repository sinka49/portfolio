<template>
    <a :href='url + "&utm_source=personal-website&pcampaignid=MKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1"'>
        <img class="badge" style="display:block;" alt='Get it on Google Play' src='../../images/generic.png'/>
    </a>
</template>

<script>
export default {
  name: "PlayStoreBadge",
  props: {
    url: String
  }
};
</script>

<style lang="scss">
.badge {
    width: 190px;
    height: -1;
}
</style>
