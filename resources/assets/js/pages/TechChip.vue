<template>
    <button id="tech-chip" :href="link">
        {{ text }}
    </button>
</template>

<script>
export default {
  name: "TechChip",
  props: ["text", "link"]
};
</script>

<style lang="scss" scoped>
#tech-chip {
  height: 28px;
  min-width: 100px;
  background: #ffffff;
  color: #0d0d0d;
  border-radius: 90px;
  font-family: sans-serif;
  text-align: center;
  line-height: normal;
  padding: 5px 15px;
  margin: 8px 6px;
  border: none;
  outline: none;
  box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.2);
  transition: 100ms box-shadow ease-in;
  &:hover {
      box-shadow: 0px 3px 4px rgba(0, 0, 0, 0.2);
  }
}
</style>
