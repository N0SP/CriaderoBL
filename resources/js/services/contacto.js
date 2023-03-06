import { ApiService } from './api.service.js';

export const EnviarContacto = (datos) => {
    return new Promise(async resolve => {
        return ApiService.post("contacto", datos)
            .then((response) => {
                resolve(response);
                if (response.status === 200) {
                    location.reload();
                }
            })
            .catch(({ response }) => {
                resolve(response);
            });
    });
}