import { createApp, ref } from "vue";
import Chart from "chart.js/auto";

const chart = createApp({});

chart.component("chart-component", {
    mounted() {
        const ctx = this.$el.getContext("2d");

        fetch("/dashboard/posts")
            .then((response) => response.json())
            .then((data) => {
                new Chart(ctx, {
                    type: "bar",
                    data: {
                        labels: ["Users"],
                        datasets: [
                            {
                                label: "Total Users",
                                data: [data],
                                backgroundColor: "#6EE7B7",
                                borderColor: "#10B981",
                                borderWidth: 2,
                                tension: 0.4,
                            },
                        ],
                    },
                    options: {
                        responsive: true,
                        scales: {
                            y: {
                                beginAtZero: true,
                            },
                        },
                    },
                });
            })
            .catch((error) => {
                console.error("Failed to fetch data:", error);
            });
    },
    template: `
        <canvas></canvas>
    `,
});

chart.mount("#chart");
